<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Family;
use App\Models\InsuranceDetail;
use App\Models\InvestmentDetail;
use App\Models\Loan;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderByDesc('created_at')->get();
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function show($id)
    {
        $customer = Customer::with(['loans', 'investments', 'insurances'])->findOrFail($id);
        return view('admin.customer.view', compact('customer'));
    }

    public function create()
    {
        return view('admin.customer.create');
    }
    public function store(Request $request)
    {
        // Begin a transaction
        DB::beginTransaction();

        try {
            // Validate the request data
            $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|max:15',
                'email' => 'nullable|email|max:255',
                'name_of_organization' => 'nullable|string|max:255',
                'job_profile' => 'nullable|string|max:255',
                'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
                'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
                'nature_of_activity' => 'nullable|string',
                'turnover' => 'nullable|string',
                'family.*.name' => 'required|string|max:255',
                'family.*.DOB' => 'required|date',
                'family.*.profession' => 'nullable|string|max:255',
                'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
                'loan.*.type_of_bank' => 'nullable|string|max:255',
                'loan.*.loan_type' => 'nullable|string|max:255',
                'loan.*.loan_amount' => 'nullable|numeric',
                'loan.*.EMI' => 'nullable|numeric',
                'loan.*.start_date' => 'nullable|date',
                'loan.*.comment' => 'nullable|string',
                'insurance.*.type_of_insurance_company' => 'nullable|string',
                'insurance.*.type_of_policy' => 'nullable|string',
                'insurance.*.premium' => 'nullable|numeric',
                'insurance.*.policy_start_date' => 'nullable|date',
                'insurance.*.policy_end_date' => 'nullable|date',
                'insurance.*.comment' => 'nullable|string',
                'investment.*.financial_institute_name' => 'nullable|string',
                'investment.*.type_of_investment' => 'nullable|string',
                'investment.*.investments' => 'nullable|string',
                'investment.*.start_date' => 'nullable|date',
                'investment.*.end_date' => 'nullable|date',
                'investment.*.comments' => 'nullable|string',
            ]);

            // Prepare data
            $data = $request->all();

            // Set default values for salary and business
            $data['salary'] = $request->has('salary');
            $data['business'] = $request->has('business');

            // Step 1: Save customer details
            $customer = Customer::create($data);

            // Step 2: Save family details
            foreach ($request->input('family') as $family) {
                Family::create([
                    'customer_id' => $customer->id,
                    'name' => $family['name'],
                    'DOB' => $family['DOB'],
                    'profession' => $family['profession'],
                    'relation' => $family['relation'],
                ]);
            }

            // Step 3: Save loan details if provided
            if ($request->has('loan')) {
                foreach ($request->input('loan') as $loan) {
                    Loan::create([
                        'customer_id' => $customer->id,
                        'type_of_bank' => $loan['type_of_bank'] ?? null,
                        'loan_type' => $loan['loan_type'] ?? null,
                        'loan_amount' => $loan['loan_amount'] ?? null,
                        'EMI' => $loan['EMI'] ?? null,
                        'start_date' => $loan['start_date'] ?? null,
                        'comment' => $loan['comment'] ?? null,
                        'added_by' => auth()->id(),
                    ]);
                }
            }

            // Store insurance
            foreach ($request->insurance as $insuranceData) {
                InsuranceDetail::create([
                    'customer_id' => $customer->id,
                    'type_of_insurance_company' => $insuranceData['type_of_insurance_company'],
                    'type_of_policy' => $insuranceData['type_of_policy'],
                    'premium' => $insuranceData['premium'],
                    'policy_start_date' => $insuranceData['policy_start_date'],
                    'policy_end_date' => $insuranceData['policy_end_date'],
                    'comment' => $insuranceData['comment'],
                    'added_by' => auth()->id(),
                ]);
            }

            // Store investments
            foreach ($request->investment as $investmentData) {
                InvestmentDetail::create([
                    'customer_id' => $customer->id,
                    'financial_institute_name' => $investmentData['financial_institute_name'],
                    'type_of_investment' => $investmentData['type_of_investment'],
                    'investments' => $investmentData['investments'],
                    'start_date' => $investmentData['start_date'],
                    'end_date' => $investmentData['end_date'],
                    'comments' => $investmentData['comments'],
                    'added_by' => auth()->id(),
                ]);
            }

            // Commit the transaction
            DB::commit();

            return redirect()->route('customers.index')->with('success', 'Customer, family, loan, insurance, and investment details saved successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();
            \Log::error($e->getMessage());

            return redirect()
                ->back()
                ->with('error', 'Failed to save details: ' . $e->getMessage());
        }
    }

    // public function store(Request $request)
    // {
    //     // Begin a transaction
    //     DB::beginTransaction();

    //     try {
    //         // Validate the request data
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'mobile' => 'required|string|max:15', // Adjust max length as needed
    //             'email' => 'nullable|email|max:255',
    //             'name_of_organization' => 'nullable|string|max:255',
    //             'job_profile' => 'nullable|string|max:255',
    //             'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
    //             'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
    //             'nature_of_activity' => 'nullable|string',
    //             'turnover' => 'nullable|string',
    //             'family.*.name' => 'required|string|max:255',
    //             'family.*.DOB' => 'required|date',
    //             'family.*.profession' => 'nullable|string|max:255',
    //             'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
    //             'loan_type' => 'nullable|string|max:255', // Validation for loan type
    //             'loan_amount' => 'nullable|numeric|min:0', // Loan amount validation
    //             'EMI' => 'nullable|numeric|min:0', // EMI validation
    //             'start_date' => 'nullable|date', // Start date validation
    //             'comment' => 'nullable|string', // Comment field validation
    //             'type_of_insurance_company' => 'nullable|string|max:255', // Insurance company validation
    //             'type_of_policy' => 'nullable|string|max:255', // Policy type validation
    //             'premium' => 'nullable|numeric|min:0', // Premium validation
    //             'policy_start_date' => 'nullable|date', // Policy start date validation
    //             'policy_end_date' => 'nullable|date', // Policy end date validation
    //         ]);

    //         // Prepare data, handling checkboxes
    //         $data = $request->all();

    //         // Set default values for salary and business
    //         $data['salary'] = $request->has('salary'); // true if checked, false otherwise
    //         $data['business'] = $request->has('business'); // true if checked, false otherwise

    //         // Step 1: Save customer details
    //         $customer = Customer::create($data);

    //         // Step 2: Save family details
    //         foreach ($request->input('family') as $family) {
    //             Family::create([
    //                 'customer_id' => $customer->id, // Set foreign key
    //                 'name' => $family['name'],
    //                 'DOB' => $family['DOB'],
    //                 'profession' => $family['profession'],
    //                 'relation' => $family['relation'],
    //             ]);
    //         }

    //         // Step 3: Save loan details if provided
    //         if ($request->has('loan_type') && $request->has('loan_amount')) {
    //             Loan::create([
    //                 'customer_id' => $customer->id, // Foreign key to customer
    //                 'type_of_bank' => $request->input('type_of_bank'),
    //                 'loan_type' => $request->input('loan_type'),
    //                 'loan_amount' => $request->input('loan_amount'),
    //                 'EMI' => $request->input('EMI'),
    //                 'start_date' => $request->input('start_date'),
    //                 'comment' => $request->input('comment'),
    //                 'added_by' => auth()->id(), // Assuming current logged-in user is the one adding the loan
    //             ]);
    //         }

    //         // Step 4: Save insurance details if provided
    //         if ($request->has('type_of_insurance_company') && $request->has('premium')) {
    //             InsuranceDetail::create([
    //                 'customer_id' => $customer->id, // Foreign key to customer
    //                 'type_of_insurance_company' => $request->input('type_of_insurance_company'),
    //                 'type_of_policy' => $request->input('type_of_policy'),
    //                 'premium' => $request->input('premium'),
    //                 'policy_start_date' => $request->input('policy_start_date'),
    //                 'policy_end_date' => $request->input('policy_end_date'),
    //                 'comment' => $request->input('comment'),
    //                 'added_by' => auth()->id(), // Assuming current logged-in user is the one adding the insurance
    //             ]);
    //         }

    //         // Commit the transaction
    //         DB::commit();

    //         return redirect()->route('customers.index')->with('success', 'Customer, family, loan, and insurance details saved successfully.');
    //     } catch (\Exception $e) {
    //         // Rollback the transaction in case of an error
    //         DB::rollBack();
    //         \Log::error($e->getMessage());

    //         return redirect()
    //             ->back()
    //             ->with('error', 'Failed to save details: ' . $e->getMessage());
    //     }
    // }

    // public function store(Request $request)
    // {
    //     // Begin a transaction
    //     DB::beginTransaction();

    //     try {
    //         // Validate the request data
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'mobile' => 'required|string|max:15', // Adjust max length as needed
    //             'email' => 'nullable|email|max:255',
    //             'name_of_organization' => 'nullable|string|max:255',
    //             'job_profile' => 'nullable|string|max:255',
    //             'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
    //             'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
    //             'nature_of_activity' => 'nullable|string',
    //             'turnover' => 'nullable|string',
    //             'family.*.name' => 'required|string|max:255',
    //             'family.*.DOB' => 'required|date',
    //             'family.*.profession' => 'nullable|string|max:255',
    //             'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
    //             'loan_type' => 'nullable|string|max:255',  // Validation for loan type
    //             'loan_amount' => 'nullable|numeric|min:0', // Loan amount validation
    //             'EMI' => 'nullable|numeric|min:0',         // EMI validation
    //             'start_date' => 'nullable|date',           // Start date validation
    //             'comment' => 'nullable|string',            // Comment field validation
    //         ]);

    //         // Prepare data, handling checkboxes
    //         $data = $request->all();

    //         // Set default values for salary and business
    //         $data['salary'] = $request->has('salary'); // true if checked, false otherwise
    //         $data['business'] = $request->has('business'); // true if checked, false otherwise

    //         // Step 1: Save customer details
    //         $customer = Customer::create($data);

    //         // Step 2: Save family details
    //         foreach ($request->input('family') as $family) {
    //             Family::create([
    //                 'customer_id' => $customer->id, // Set foreign key
    //                 'name' => $family['name'],
    //                 'DOB' => $family['DOB'],
    //                 'profession' => $family['profession'],
    //                 'relation' => $family['relation'],
    //             ]);
    //         }

    //         // Step 3: Save loan details if loan data is provided
    //         if ($request->has('loan_type') && $request->has('loan_amount')) {
    //             Loan::create([
    //                 'customer_id' => $customer->id, // Foreign key to customer
    //                 'type_of_bank' => $request->input('type_of_bank'),
    //                 'loan_type' => $request->input('loan_type'),
    //                 'loan_amount' => $request->input('loan_amount'),
    //                 'EMI' => $request->input('EMI'),
    //                 'start_date' => $request->input('start_date'),
    //                 'comment' => $request->input('comment'),
    //                 'added_by' => auth()->id(), // Assuming current logged-in user is the one adding the loan
    //             ]);
    //         }

    //         // Commit the transaction
    //         DB::commit();

    //         return redirect()->route('customers.index')->with('success', 'Customer, family, and loan details saved successfully.');
    //     } catch (\Exception $e) {
    //         // Rollback the transaction in case of an error
    //         DB::rollBack();
    //         \Log::error($e->getMessage());

    //         return redirect()->back()->with('error', 'Failed to save customer details: ' . $e->getMessage());
    //     }
    // }

    // public function store(Request $request)
    // {
    //     // Begin a transaction
    //     DB::beginTransaction();

    //     try {
    //         // Prepare data, handling checkboxes
    //         $data = $request->all();

    //         // Set default values for salary and business
    //         $data['salary'] = $request->has('salary') ? true : false;
    //         $data['business'] = $request->has('business') ? true : false;

    //         // Step 1: Save customer details
    //         $customer = Customer::create($data);

    //         // Step 2: Save family details
    //         foreach ($request->input('family') as $family) {
    //             $familyMember = new Family();
    //             $familyMember->customer_id = $customer->id; // Set foreign key
    //             $familyMember->name = $family['name'];
    //             $familyMember->DOB = $family['DOB'];
    //             $familyMember->profession = $family['profession'];
    //             $familyMember->relation = $family['relation'];
    //             $familyMember->save();
    //         }

    //         // Commit the transaction
    //         DB::commit();

    //         return redirect()->route('customers.index')->with('success', 'Customer and family details saved successfully.');

    //     } catch (\Exception $e) {
    //         // Rollback the transaction in case of an error
    //         DB::rollBack();
    //         \Log::error($e->getMessage());

    //         return redirect()->back()->with('error', 'Failed to save customer details: ' . $e->getMessage());
    //     }
    // }

    public function edit($id)
    {
        $customer = Customer::with(['family', 'loans', 'insurances', 'investments'])->findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {
        // Begin a transaction
        DB::beginTransaction();

        try {
            // Validate the request data
            // Validate the request data
            $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|max:15',
                'email' => 'nullable|email|max:255',
                'name_of_organization' => 'nullable|string|max:255',
                'job_profile' => 'nullable|string|max:255',
                'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
                'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
                'nature_of_activity' => 'nullable|string',
                'turnover' => 'nullable|string',
                'family.*.name' => 'required|string|max:255',
                'family.*.DOB' => 'required|date',
                'family.*.profession' => 'nullable|string|max:255',
                'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
                'loan.*.type_of_bank' => 'nullable|string|max:255',
                'loan.*.loan_type' => 'nullable|string|max:255',
                'loan.*.loan_amount' => 'nullable|numeric',
                'loan.*.EMI' => 'nullable|numeric',
                'loan.*.start_date' => 'nullable|date',
                'loan.*.comment' => 'nullable|string',
                'insurance.*.type_of_insurance_company' => 'nullable|string',
                'insurance.*.type_of_policy' => 'nullable|string',
                'insurance.*.premium' => 'nullable|numeric',
                'insurance.*.policy_start_date' => 'nullable|date',
                'insurance.*.policy_end_date' => 'nullable|date',
                'insurance.*.comment' => 'nullable|string',
                'investment.*.financial_institute_name' => 'nullable|string',
                'investment.*.type_of_investment' => 'nullable|string',
                'investment.*.investments' => 'nullable|string',
                'investment.*.start_date' => 'nullable|date',
                'investment.*.end_date' => 'nullable|date',
                'investment.*.comments' => 'nullable|string',
            ]);

            // Find the customer
            $customer = Customer::findOrFail($id);

            // Update customer details
            $customer->update($request->only(['name', 'mobile', 'email']));

            // Update family details
            $familyIds = [];
            foreach ($request->input('family') as $familyData) {
                $familyIds[] = Family::updateOrCreate(
                    ['customer_id' => $customer->id, 'id' => $familyData['id'] ?? null],
                    [
                        'name' => $familyData['name'],
                        'DOB' => $familyData['DOB'],
                        'profession' => $familyData['profession'],
                        'relation' => $familyData['relation'],
                    ],
                )->id;
            }
            $customer->family()->whereNotIn('id', $familyIds)->delete();

            // Update loans
            $loanIds = [];
            foreach ($request->input('loan', []) as $loanData) {
                $loanIds[] = Loan::updateOrCreate(
                    ['customer_id' => $customer->id, 'id' => $loanData['id'] ?? null],
                    [
                        'type_of_bank' => $loanData['type_of_bank'],
                        'loan_type' => $loanData['loan_type'],
                        'loan_amount' => $loanData['loan_amount'],
                        'EMI' => $loanData['EMI'],
                        'start_date' => $loanData['start_date'],
                        'comment' => $loanData['comment'],
                        'updated_by' => auth()->id(),
                    ],
                )->id;
            }
            $customer->loans()->whereNotIn('id', $loanIds)->delete();

            // Update insurance details
            $insuranceIds = [];
            foreach ($request->input('insurance', []) as $insuranceData) {
                $insuranceIds[] = InsuranceDetail::updateOrCreate(
                    ['customer_id' => $customer->id, 'id' => $insuranceData['id'] ?? null],
                    [
                        'type_of_insurance_company' => $insuranceData['type_of_insurance_company'],
                        'type_of_policy' => $insuranceData['type_of_policy'],
                        'premium' => $insuranceData['premium'],
                        'policy_start_date' => $insuranceData['policy_start_date'],
                        'policy_end_date' => $insuranceData['policy_end_date'],
                        'comment' => $insuranceData['comment'],
                        'updated_by' => auth()->id(),
                    ],
                )->id;
            }
            $customer->insurances()->whereNotIn('id', $insuranceIds)->delete();

            // Update investment details
            $investmentIds = [];
            foreach ($request->input('investment', []) as $investmentData) {
                $investmentIds[] = InvestmentDetail::updateOrCreate(
                    ['customer_id' => $customer->id, 'id' => $investmentData['id'] ?? null],
                    [
                        'financial_institute_name' => $investmentData['financial_institute_name'],
                        'type_of_investment' => $investmentData['type_of_investment'],
                        'investments' => $investmentData['investments'],
                        'start_date' => $investmentData['start_date'],
                        'end_date' => $investmentData['end_date'],
                        'comments' => $investmentData['comments'],
                        'updated_by' => auth()->id(),
                    ],
                )->id;
            }
            $customer->investments()->whereNotIn('id', $investmentIds)->delete();

            // Commit the transaction
            DB::commit();

            return redirect()->route('customers.index')->with('success', 'Customer and related details updated successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();
            \Log::error($e->getMessage());

            return redirect()
                ->back()
                ->with('error', 'Failed to update details: ' . $e->getMessage());
        }
    }

    // public function update(Request $request, $id)
    // {
    //     // Begin a transaction
    //     DB::beginTransaction();

    //     try {
    //                    // Validate the request data
    //                    $request->validate([
    //                     'name' => 'required|string|max:255',
    //                     'mobile' => 'required|string|max:15',
    //                     'email' => 'nullable|email|max:255',
    //                     'name_of_organization' => 'nullable|string|max:255',
    //                     'job_profile' => 'nullable|string|max:255',
    //                     'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
    //                     'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
    //                     'nature_of_activity' => 'nullable|string',
    //                     'turnover' => 'nullable|string',
    //                     'family.*.name' => 'required|string|max:255',
    //                     'family.*.DOB' => 'required|date',
    //                     'family.*.profession' => 'nullable|string|max:255',
    //                     'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
    //                     'loan.*.type_of_bank' => 'nullable|string|max:255',
    //                     'loan.*.loan_type' => 'nullable|string|max:255',
    //                     'loan.*.loan_amount' => 'nullable|numeric',
    //                     'loan.*.EMI' => 'nullable|numeric',
    //                     'loan.*.start_date' => 'nullable|date',
    //                     'loan.*.comment' => 'nullable|string',
    //                     'insurance.*.type_of_insurance_company' => 'nullable|string',
    //                     'insurance.*.type_of_policy' => 'nullable|string',
    //                     'insurance.*.premium' => 'nullable|numeric',
    //                     'insurance.*.policy_start_date' => 'nullable|date',
    //                     'insurance.*.policy_end_date' => 'nullable|date',
    //                     'insurance.*.comment' => 'nullable|string',
    //                     'investment.*.financial_institute_name' => 'nullable|string',
    //                     'investment.*.type_of_investment' => 'nullable|string',
    //                     'investment.*.investments' => 'nullable|string',
    //                     'investment.*.start_date' => 'nullable|date',
    //                     'investment.*.end_date' => 'nullable|date',
    //                     'investment.*.comments' => 'nullable|string',
    //                 ]);

    //         // Find the customer
    //         $customer = Customer::findOrFail($id);

    //         // Update customer details
    //         $customer->update($request->only(['name', 'mobile', 'email']));

    //         // Update family details
    //         $familyIds = [];
    //         foreach ($request->input('family') as $familyData) {
    //             $familyIds[] = Family::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $familyData['id'] ?? null],
    //                 [
    //                     'name' => $familyData['name'],
    //                     'DOB' => $familyData['DOB'],
    //                     'profession' => $familyData['profession'],
    //                     'relation' => $familyData['relation'],
    //                 ]
    //             )->id;
    //         }
    //         $customer->family()->whereNotIn('id', $familyIds)->delete();

    //         // Update loans
    //         $loanIds = [];
    //         foreach ($request->input('loan', []) as $loanData) {
    //             $loanIds[] = Loan::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $loanData['id'] ?? null],
    //                 [
    //                     'type_of_bank' => $loanData['type_of_bank'],
    //                     'loan_type' => $loanData['loan_type'],
    //                     'loan_amount' => $loanData['loan_amount'],
    //                     'EMI' => $loanData['EMI'],
    //                     'start_date' => $loanData['start_date'],
    //                     'comment' => $loanData['comment'],
    //                     'updated_by' => auth()->id(),
    //                 ]
    //             )->id;
    //         }
    //         $customer->loans()->whereNotIn('id', $loanIds)->delete();

    //         // Update insurance details
    //         $insuranceIds = [];
    //         foreach ($request->input('insurance', []) as $insuranceData) {
    //             $insuranceIds[] = InsuranceDetail::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $insuranceData['id'] ?? null],
    //                 [
    //                     'type_of_insurance_company' => $insuranceData['type_of_insurance_company'],
    //                     'type_of_policy' => $insuranceData['type_of_policy'],
    //                     'premium' => $insuranceData['premium'],
    //                     'policy_start_date' => $insuranceData['policy_start_date'],
    //                     'policy_end_date' => $insuranceData['policy_end_date'],
    //                     'comment' => $insuranceData['comment'],
    //                     'updated_by' => auth()->id(),
    //                 ]
    //             )->id;
    //         }
    //         $customer->insurances()->whereNotIn('id', $insuranceIds)->delete();

    //         // Update investment details
    //         $investmentIds = [];
    //         foreach ($request->input('investment', []) as $investmentData) {
    //             $investmentIds[] = InvestmentDetail::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $investmentData['id'] ?? null],
    //                 [
    //                     'financial_institute_name' => $investmentData['financial_institute_name'],
    //                     'type_of_investment' => $investmentData['type_of_investment'],
    //                     'investments' => $investmentData['investments'],
    //                     'start_date' => $investmentData['start_date'],
    //                     'end_date' => $investmentData['end_date'],
    //                     'comments' => $investmentData['comments'],
    //                     'updated_by' => auth()->id(),
    //                 ]
    //             )->id;
    //         }
    //         $customer->investments()->whereNotIn('id', $investmentIds)->delete();

    //         // Commit the transaction
    //         DB::commit();

    //         return redirect()->route('customers.index')->with('success', 'Customer and related details updated successfully.');
    //     } catch (\Exception $e) {
    //         // Rollback the transaction in case of an error
    //         DB::rollBack();
    //         \Log::error($e->getMessage());

    //         return redirect()
    //             ->back()
    //             ->with('error', 'Failed to update details: ' . $e->getMessage());
    //     }
    // }

    // public function update(Request $request, $id)
    // {
    //     // Begin a transaction
    //     DB::beginTransaction();

    //     try {
    //         // Validate the request data
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'mobile' => 'required|string|max:15',
    //             'email' => 'nullable|email|max:255',
    //             'name_of_organization' => 'nullable|string|max:255',
    //             'job_profile' => 'nullable|string|max:255',
    //             'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
    //             'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
    //             'nature_of_activity' => 'nullable|string',
    //             'turnover' => 'nullable|string',
    //             'family.*.name' => 'required|string|max:255',
    //             'family.*.DOB' => 'required|date',
    //             'family.*.profession' => 'nullable|string|max:255',
    //             'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
    //             'loan.*.type_of_bank' => 'nullable|string|max:255',
    //             'loan.*.loan_type' => 'nullable|string|max:255',
    //             'loan.*.loan_amount' => 'nullable|numeric',
    //             'loan.*.EMI' => 'nullable|numeric',
    //             'loan.*.start_date' => 'nullable|date',
    //             'loan.*.comment' => 'nullable|string',
    //             'insurance.*.type_of_insurance_company' => 'nullable|string',
    //             'insurance.*.type_of_policy' => 'nullable|string',
    //             'insurance.*.premium' => 'nullable|numeric',
    //             'insurance.*.policy_start_date' => 'nullable|date',
    //             'insurance.*.policy_end_date' => 'nullable|date',
    //             'insurance.*.comment' => 'nullable|string',
    //             'investment.*.financial_institute_name' => 'nullable|string',
    //             'investment.*.type_of_investment' => 'nullable|string',
    //             'investment.*.investments' => 'nullable|string',
    //             'investment.*.start_date' => 'nullable|date',
    //             'investment.*.end_date' => 'nullable|date',
    //             'investment.*.comments' => 'nullable|string',
    //         ]);

    //         // Find the customer
    //         $customer = Customer::findOrFail($id);

    //         // Update customer details
    //         $customer->update($request->only(['name', 'mobile', 'email']));

    //         // Update family details
    //         $familyIds = []; // To track family IDs for deletion later
    //         foreach ($request->input('family') as $familyData) {
    //             $familyIds[] = Family::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $familyData['id'] ?? null],
    //                 [
    //                     'name' => $familyData['name'],
    //                     'DOB' => $familyData['DOB'],
    //                     'profession' => $familyData['profession'],
    //                     'relation' => $familyData['relation'],
    //                 ],
    //             )->id; // Store the ID of the updated/created family member
    //         }

    //         // Delete family members that are no longer in the request
    //         $customer->family()->whereNotIn('id', $familyIds)->delete();

    //         // Repeat the same process for loans
    //         $loanIds = [];
    //         foreach ($request->input('loan', []) as $loanData) {
    //             $loanIds[] = Loan::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $loanData['id'] ?? null],
    //                 [
    //                     'type_of_bank' => $loanData['type_of_bank'],
    //                     'loan_type' => $loanData['loan_type'],
    //                     'loan_amount' => $loanData['loan_amount'],
    //                     'EMI' => $loanData['EMI'],
    //                     'start_date' => $loanData['start_date'],
    //                     'comment' => $loanData['comment'],
    //                     'updated_by' => auth()->id(),
    //                 ],
    //             )->id;
    //         }
    //         $customer->loans()->whereNotIn('id', $loanIds)->delete();

    //         // Update insurance details
    //         $insuranceIds = [];
    //         foreach ($request->input('insurance', []) as $insuranceData) {
    //             $insuranceIds[] = InsuranceDetail::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $insuranceData['id'] ?? null],
    //                 [
    //                     'type_of_insurance_company' => $insuranceData['type_of_insurance_company'],
    //                     'type_of_policy' => $insuranceData['type_of_policy'],
    //                     'premium' => $insuranceData['premium'],
    //                     'policy_start_date' => $insuranceData['policy_start_date'],
    //                     'policy_end_date' => $insuranceData['policy_end_date'],
    //                     'comment' => $insuranceData['comment'],
    //                     'updated_by' => auth()->id(),
    //                 ],
    //             )->id;
    //         }
    //         $customer->insuranceDetails()->whereNotIn('id', $insuranceIds)->delete();

    //         // Update investment details
    //         $investmentIds = [];
    //         foreach ($request->input('investment', []) as $investmentData) {
    //             $investmentIds[] = InvestmentDetail::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $investmentData['id'] ?? null],
    //                 [
    //                     'financial_institute_name' => $investmentData['financial_institute_name'],
    //                     'type_of_investment' => $investmentData['type_of_investment'],
    //                     'investments' => $investmentData['investments'],
    //                     'start_date' => $investmentData['start_date'],
    //                     'end_date' => $investmentData['end_date'],
    //                     'comments' => $investmentData['comments'],
    //                     'updated_by' => auth()->id(),
    //                 ],
    //             )->id;
    //         }
    //         $customer->investmentDetails()->whereNotIn('id', $investmentIds)->delete();

    //         // Commit the transaction
    //         DB::commit();

    //         return redirect()->route('customers.index')->with('success', 'Customer and related details updated successfully.');
    //     } catch (\Exception $e) {
    //         // Rollback the transaction in case of an error
    //         DB::rollBack();
    //         \Log::error($e->getMessage());

    //         return redirect()
    //             ->back()
    //             ->with('error', 'Failed to update details: ' . $e->getMessage());
    //     }
    // }

    // public function update(Request $request, $id)
    // {
    //     // Begin a transaction
    //     DB::beginTransaction();

    //     try {
    //         // Validate the request data
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'mobile' => 'required|string|max:15',
    //             'email' => 'nullable|email|max:255',
    //             'name_of_organization' => 'nullable|string|max:255',
    //             'job_profile' => 'nullable|string|max:255',
    //             'income_slab' => 'nullable|in:Below 5 lacs,Rs 5 lacs to Rs 10 lacs,Rs 10 lacs to Rs 20 lacs,Above Rs 20 lacs',
    //             'nature_of_business' => 'nullable|in:Trading,Manufacturing,Contractor,Service Provider,Professional,Other',
    //             'nature_of_activity' => 'nullable|string',
    //             'turnover' => 'nullable|string',
    //             'family.*.name' => 'required|string|max:255',
    //             'family.*.DOB' => 'required|date',
    //             'family.*.profession' => 'nullable|string|max:255',
    //             'family.*.relation' => 'required|in:Mother,Father,Daughter,Son,Sibling,Cousin,Wife,Husband,Grandchild,Grandmother,Grandfather,Sister-in-Law,Mother-in-Law,Father-in-Law,Brother-in-Law,Nephew,Niece,Uncle,Aunty,Other',
    //             'loan.*.type_of_bank' => 'nullable|string|max:255',
    //             'loan.*.loan_type' => 'nullable|string|max:255',
    //             'loan.*.loan_amount' => 'nullable|numeric',
    //             'loan.*.EMI' => 'nullable|numeric',
    //             'loan.*.start_date' => 'nullable|date',
    //             'loan.*.comment' => 'nullable|string',
    //             'insurance.*.type_of_insurance_company' => 'nullable|string',
    //             'insurance.*.type_of_policy' => 'nullable|string',
    //             'insurance.*.premium' => 'nullable|numeric',
    //             'insurance.*.policy_start_date' => 'nullable|date',
    //             'insurance.*.policy_end_date' => 'nullable|date',
    //             'insurance.*.comment' => 'nullable|string',
    //             'investment.*.financial_institute_name' => 'nullable|string',
    //             'investment.*.type_of_investment' => 'nullable|string',
    //             'investment.*.investments' => 'nullable|string',
    //             'investment.*.start_date' => 'nullable|date',
    //             'investment.*.end_date' => 'nullable|date',
    //             'investment.*.comments' => 'nullable|string',
    //         ]);

    //         // Find the customer
    //         $customer = Customer::findOrFail($id);

    //         // Update customer details
    //         $customer->update($request->all());

    //         // Update family details
    //         foreach ($request->input('family') as $family) {
    //             // You can use updateOrCreate to handle both updating existing records and creating new ones
    //             Family::updateOrCreate(
    //                 ['customer_id' => $customer->id, 'id' => $family['id'] ?? null], // Ensure ID is passed for existing records
    //                 [
    //                     'name' => $family['name'],
    //                     'DOB' => $family['DOB'],
    //                     'profession' => $family['profession'],
    //                     'relation' => $family['relation'],
    //                 ],
    //             );
    //         }

    //         // Update loan details
    //         if ($request->has('loan')) {
    //             foreach ($request->input('loan') as $loan) {
    //                 Loan::updateOrCreate(
    //                     ['customer_id' => $customer->id, 'id' => $loan['id'] ?? null],
    //                     [
    //                         'type_of_bank' => $loan['type_of_bank'],
    //                         'loan_type' => $loan['loan_type'],
    //                         'loan_amount' => $loan['loan_amount'],
    //                         'EMI' => $loan['EMI'],
    //                         'start_date' => $loan['start_date'],
    //                         'comment' => $loan['comment'],
    //                         'updated_by' => auth()->id(),
    //                     ],
    //                 );
    //             }
    //         }

    //         // Update insurance details
    //         if ($request->has('insurance')) {
    //             foreach ($request->input('insurance') as $insuranceData) {
    //                 InsuranceDetail::updateOrCreate(
    //                     ['customer_id' => $customer->id, 'id' => $insuranceData['id'] ?? null],
    //                     [
    //                         'type_of_insurance_company' => $insuranceData['type_of_insurance_company'],
    //                         'type_of_policy' => $insuranceData['type_of_policy'],
    //                         'premium' => $insuranceData['premium'],
    //                         'policy_start_date' => $insuranceData['policy_start_date'],
    //                         'policy_end_date' => $insuranceData['policy_end_date'],
    //                         'comment' => $insuranceData['comment'],
    //                         'updated_by' => auth()->id(),
    //                     ],
    //                 );
    //             }
    //         }

    //         // Update investment details
    //         if ($request->has('investment')) {
    //             foreach ($request->input('investment') as $investmentData) {
    //                 InvestmentDetail::updateOrCreate(
    //                     ['customer_id' => $customer->id, 'id' => $investmentData['id'] ?? null],
    //                     [
    //                         'financial_institute_name' => $investmentData['financial_institute_name'],
    //                         'type_of_investment' => $investmentData['type_of_investment'],
    //                         'investments' => $investmentData['investments'],
    //                         'start_date' => $investmentData['start_date'],
    //                         'end_date' => $investmentData['end_date'],
    //                         'comments' => $investmentData['comments'],
    //                         'updated_by' => auth()->id(),
    //                     ],
    //                 );
    //             }
    //         }

    //         // Commit the transaction
    //         DB::commit();

    //         return redirect()->route('customers.index')->with('success', 'Customer, family, loan, insurance, and investment details updated successfully.');
    //     } catch (\Exception $e) {
    //         // Rollback the transaction in case of an error
    //         DB::rollBack();
    //         \Log::error($e->getMessage());

    //         return redirect()
    //             ->back()
    //             ->with('error', 'Failed to update details: ' . $e->getMessage());


    public function destroy($id)
    {

        $customer = Customer::find($id);

        if ($customer) {
            $customer->delete();
            return redirect()->back()->with('success', 'customer deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'customer not found!');
        }
    }

}
