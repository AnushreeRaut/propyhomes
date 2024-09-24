@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">

        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Customer</h1>

        @include('auth.success-message')
        @include('auth.error-message')
        <!-- Back Button -->
        <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white"
                onclick="history.back()">
                <i class="fas fa-arrow-left text-white"></i> Back to previous
            </button>
        </div>

        <div class="container mt-4">
            <ul class="nav nav-tabs" id="detailsTabs" role="tablist">
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" href="#personal" role="tab"
                        aria-controls="personal" aria-selected="true"
                        style="background-color: #c8a864; color:white;">Personal Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab"
                        aria-controls="professional" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Professional Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="financial-tab" data-bs-toggle="tab" href="#financial" role="tab"
                        aria-controls="financial" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Financial Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="insurance-tab" data-bs-toggle="tab" href="#insurance" role="tab"
                        aria-controls="insurance" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Insurance Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="investment-tab" data-bs-toggle="tab" href="#investment" role="tab"
                        aria-controls="investment" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Investment Details</a>
                </li>
            </ul>
            <form method="POST" action="{{ route('customers.update', $customer->id) }}" id="combinedForm">
                @csrf
                @method('PUT')
                <div class="tab-content mt-3" id="detailsTabContent">
                    <!-- Personal Details -->
                    <!-- Personal Details -->
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                        <h4>Personal Details</h4>
                        <div class="row">
                            <!-- Name -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label dpage5label">Name</label>
                                        <input type="text" name="name" id="name" class="form-control dpage5input"
                                            placeholder="Enter here..." required>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="mobile" class="form-label dpage5label">Mobile</label>
                                        <input type="text" name="mobile" id="mobile" class="form-control dpage5input"
                                            placeholder="Enter here..." required>
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="email" class="form-label dpage5label">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control dpage5input" placeholder="Enter here..." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="family-details" id="familyMembersContainer">
                            @foreach ($customer->family as $index => $family)
                                <div class="row family-member" id="family-member-{{ $index }}">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="family[{{ $index }}][name]"
                                                class="form-label dpage5label">Family Member Name</label>
                                            <input type="text" name="family[{{ $index }}][name]"
                                                id="family[{{ $index }}][name]" class="form-control dpage5input"
                                                value="{{ $family->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="family[{{ $index }}][DOB]">Date of Birth</label>
                                            <input type="date" name="family[{{ $index }}][DOB]"
                                                id="family[{{ $index }}][DOB]" class="form-control"
                                                value="{{ $family->DOB }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="family[{{ $index }}][profession]">Profession</label>
                                            <input type="text" name="family[{{ $index }}][profession]"
                                                id="family[{{ $index }}][profession]" class="form-control"
                                                value="{{ $family->profession }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="family[{{ $index }}][relation]">Relation</label>
                                            <select name="family[{{ $index }}][relation]"
                                                id="family[{{ $index }}][relation]" class="form-control">
                                                <option value="">Select Relation</option>
                                                <option value="Mother"
                                                    {{ $family->relation == 'Mother' ? 'selected' : '' }}>Mother</option>
                                                <option value="Father"
                                                    {{ $family->relation == 'Father' ? 'selected' : '' }}>Father</option>
                                                <option value="Daughter"
                                                    {{ $family->relation == 'Daughter' ? 'selected' : '' }}>Daughter
                                                </option>
                                                <option value="Son" {{ $family->relation == 'Son' ? 'selected' : '' }}>
                                                    Son</option>
                                                <option value="Sibling"
                                                    {{ $family->relation == 'Sibling' ? 'selected' : '' }}>Sibling</option>
                                                <option value="Cousin"
                                                    {{ $family->relation == 'Cousin' ? 'selected' : '' }}>Cousin</option>
                                                <option value="Wife"
                                                    {{ $family->relation == 'Wife' ? 'selected' : '' }}>Wife</option>
                                                <option value="Husband"
                                                    {{ $family->relation == 'Husband' ? 'selected' : '' }}>Husband</option>
                                                <option value="Grandchild"
                                                    {{ $family->relation == 'Grandchild' ? 'selected' : '' }}>Grandchild
                                                </option>
                                                <option value="Grandmother"
                                                    {{ $family->relation == 'Grandmother' ? 'selected' : '' }}>Grandmother
                                                </option>
                                                <option value="Grandfather"
                                                    {{ $family->relation == 'Grandfather' ? 'selected' : '' }}>Grandfather
                                                </option>
                                                <option value="Sister-in-Law"
                                                    {{ $family->relation == 'Sister-in-Law' ? 'selected' : '' }}>
                                                    Sister-in-Law</option>
                                                <option value="Mother-in-Law"
                                                    {{ $family->relation == 'Mother-in-Law' ? 'selected' : '' }}>
                                                    Mother-in-Law</option>
                                                <option value="Father-in-Law"
                                                    {{ $family->relation == 'Father-in-Law' ? 'selected' : '' }}>
                                                    Father-in-Law</option>
                                                <option value="Brother-in-Law"
                                                    {{ $family->relation == 'Brother-in-Law' ? 'selected' : '' }}>
                                                    Brother-in-Law</option>
                                                <option value="Nephew"
                                                    {{ $family->relation == 'Nephew' ? 'selected' : '' }}>Nephew</option>
                                                <option value="Niece"
                                                    {{ $family->relation == 'Niece' ? 'selected' : '' }}>Niece</option>
                                                <option value="Uncle"
                                                    {{ $family->relation == 'Uncle' ? 'selected' : '' }}>Uncle</option>
                                                <option value="Aunty"
                                                    {{ $family->relation == 'Aunty' ? 'selected' : '' }}>Aunty</option>
                                                <option value="Other"
                                                    {{ $family->relation == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 mt-4">
                                        <button type="button" class="btn btn-danger remove-family-member"
                                            style="display:inline-block;">×</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Add Family Member Button -->
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary" id="addFamilyMemberButton">+</button>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonPersonal">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonPersonal">Save and
                                Next</button>
                        </div>
                    </div>





                    <!-- Professional Details -->
                    <div class="tab-pane fade" id="professional" role="tabpanel" aria-labelledby="professional-tab">
                        <h4>Professional Details</h4>
                        <div class="row">
                            <!-- Salary -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label class="form-label dpage5label">Salary</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="salary" id="salary" value="1"
                                                class="form-check-input dpage5input"
                                                @if ($customer->salary) checked @endif>
                                            <label for="salary" class="form-check-label">Is Salaried?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Business -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label class="form-label dpage5label">Business</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="business" id="business" value="1"
                                                class="form-check-input dpage5input"
                                                @if ($customer->business) checked @endif>
                                            <label for="business" class="form-check-label">Owns a Business?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Name of Organization -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="name_of_organization" class="form-label dpage5label">Name of
                                            Organization</label>
                                        <input type="text" name="name_of_organization" id="name_of_organization"
                                            class="form-control dpage5input" placeholder="Enter organization name"
                                            value="{{ old('name_of_organization', $customer->name_of_organization) }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Job Profile -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="job_profile" class="form-label dpage5label">Job Profile</label>
                                        <input type="text" name="job_profile" id="job_profile"
                                            class="form-control dpage5input" placeholder="Enter job profile"
                                            value="{{ old('job_profile', $customer->job_profile) }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Income Slab -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="income_slab" class="form-label dpage5label">Income Slab</label>
                                        <select name="income_slab" id="income_slab" class="form-control dpage5input">
                                            <option value="Below 5 lacs" @if ($customer->income_slab == 'Below 5 lacs') selected @endif>
                                                Below 5 lacs</option>
                                            <option value="Rs 5 lacs to Rs 10 lacs"
                                                @if ($customer->income_slab == 'Rs 5 lacs to Rs 10 lacs') selected @endif>Rs 5 lacs to Rs 10 lacs
                                            </option>
                                            <option value="Rs 10 lacs to Rs 20 lacs"
                                                @if ($customer->income_slab == 'Rs 10 lacs to Rs 20 lacs') selected @endif>Rs 10 lacs to Rs 20 lacs
                                            </option>
                                            <option value="Above Rs 20 lacs"
                                                @if ($customer->income_slab == 'Above Rs 20 lacs') selected @endif>Above Rs 20 lacs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Nature of Business -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="nature_of_business" class="form-label dpage5label">Nature of
                                            Business</label>
                                        <select name="nature_of_business" id="nature_of_business"
                                            class="form-control dpage5input">
                                            <option value="Trading" @if ($customer->nature_of_business == 'Trading') selected @endif>
                                                Trading</option>
                                            <option value="Manufacturing"
                                                @if ($customer->nature_of_business == 'Manufacturing') selected @endif>Manufacturing</option>
                                            <option value="Contractor" @if ($customer->nature_of_business == 'Contractor') selected @endif>
                                                Contractor</option>
                                            <option value="Service Provider"
                                                @if ($customer->nature_of_business == 'Service Provider') selected @endif>Service Provider</option>
                                            <option value="Professional"
                                                @if ($customer->nature_of_business == 'Professional') selected @endif>Professional</option>
                                            <option value="Other" @if ($customer->nature_of_business == 'Other') selected @endif>
                                                Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Nature of Activity -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="nature_of_activity" class="form-label dpage5label">Nature of
                                            Activity</label>
                                        <textarea name="nature_of_activity" id="nature_of_activity" class="form-control dpage5input"
                                            placeholder="Describe the nature of activity">{{ old('nature_of_activity', $customer->nature_of_activity) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Turnover -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="turnover" class="form-label dpage5label">Turnover</label>
                                        <input type="text" name="turnover" id="turnover"
                                            class="form-control dpage5input" placeholder="Enter turnover"
                                            value="{{ old('turnover', $customer->turnover) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonProfessional">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonProfessional">Save and
                                Next</button>
                        </div>
                    </div>


                    <!-- Financial Details -->
                    <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="financial-tab">
                        <h4>Financial Details</h4>
                        <div class="loan-details" id="loanContainer">
                            @php
                                $loans = $customer->loans ?? []; // Fallback to an empty array if null
                                $loanCount = count($loans);
                            @endphp

                            @for ($index = 0; $index < $loanCount; $index++)
                                <div class="loan-entry card mb-3 p-3 border shadow-sm">
                                    <input type="hidden" name="loan[{{ $index }}][id]"
                                        value="{{ $loans[$index]->id }}">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="type_of_bank_{{ $index }}">Type of Bank</label>
                                            <input type="text" name="loan[{{ $index }}][type_of_bank]"
                                                id="type_of_bank_{{ $index }}"
                                                value="{{ old('loan.' . $index . '.type_of_bank', $loans[$index]->type_of_bank) }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="loan_type_{{ $index }}">Loan Type</label>
                                            <input type="text" name="loan[{{ $index }}][loan_type]"
                                                id="loan_type_{{ $index }}"
                                                value="{{ old('loan.' . $index . '.loan_type', $loans[$index]->loan_type) }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="loan_amount_{{ $index }}">Loan Amount</label>
                                            <input type="number" step="0.01"
                                                name="loan[{{ $index }}][loan_amount]"
                                                id="loan_amount_{{ $index }}"
                                                value="{{ old('loan.' . $index . '.loan_amount', $loans[$index]->loan_amount) }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="EMI_{{ $index }}">EMI</label>
                                            <input type="number" step="0.01" name="loan[{{ $index }}][EMI]"
                                                id="EMI_{{ $index }}"
                                                value="{{ old('loan.' . $index . '.EMI', $loans[$index]->EMI) }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="start_date_{{ $index }}">Start Date</label>
                                            <input type="date" name="loan[{{ $index }}][start_date]"
                                                id="start_date_{{ $index }}"
                                                value="{{ old('loan.' . $index . '.start_date', $loans[$index]->start_date) }}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="comment_{{ $index }}">Comment</label>
                                            <textarea name="loan[{{ $index }}][comment]" id="comment_{{ $index }}" class="form-control">{{ old('loan.' . $index . '.comment', $loans[$index]->comment) }}</textarea>
                                        </div>
                                    </div>
                                    <div class=""> <button type="button"
                                            class="btn btn-danger btn-sm remove-loan mt-3">Remove Loan</button></div>
                                </div>
                            @endfor
                        </div>

                        <!-- Add Loan Button -->
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary" id="addLoanButton">+ Add Loan</button>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonFinancial">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonFinancial">Save and
                                Next</button>
                        </div>
                    </div>

                    <!-- Insurance Details -->
                    <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                        <h4>Insurance Details</h4>
                        <div id="insuranceDetailsContainer">
                            @foreach ($customer->insurances as $index => $insurance)
                                <div class="row insurance-detail" id="insurance-detail-{{ $index }}">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="insurance[{{ $index }}][type_of_insurance_company]"
                                                class="form-label">Type of Insurance Company</label>
                                            <input type="text"
                                                name="insurance[{{ $index }}][type_of_insurance_company]"
                                                class="form-control" placeholder="Enter insurance company type"
                                                value="{{ old('insurance.' . $index . '.type_of_insurance_company', $insurance->type_of_insurance_company) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="insurance[{{ $index }}][type_of_policy]"
                                                class="form-label">Type of Policy</label>
                                            <input type="text" name="insurance[{{ $index }}][type_of_policy]"
                                                class="form-control" placeholder="Enter policy type"
                                                value="{{ old('insurance.' . $index . '.type_of_policy', $insurance->type_of_policy) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="insurance[{{ $index }}][premium]"
                                                class="form-label">Premium</label>
                                            <input type="text" name="insurance[{{ $index }}][premium]"
                                                class="form-control" placeholder="Enter premium amount"
                                                value="{{ old('insurance.' . $index . '.premium', $insurance->premium) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row insurance-detail" id="insurance-detail-{{ $index }}">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="insurance[{{ $index }}][policy_start_date]"
                                                class="form-label">Policy Start Date</label>
                                            <input type="date"
                                                name="insurance[{{ $index }}][policy_start_date]"
                                                class="form-control"
                                                value="{{ old('insurance.' . $index . '.policy_start_date', $insurance->policy_start_date) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="insurance[{{ $index }}][policy_end_date]"
                                                class="form-label">Policy End Date</label>
                                            <input type="date" name="insurance[{{ $index }}][policy_end_date]"
                                                class="form-control"
                                                value="{{ old('insurance.' . $index . '.policy_end_date', $insurance->policy_end_date) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="insurance[{{ $index }}][comment]"
                                                class="form-label">Comment</label>
                                            <textarea name="insurance[{{ $index }}][comment]" class="form-control" placeholder="Enter your comment">{{ old('insurance.' . $index . '.comment', $insurance->comment) }}</textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger remove-insurance">Remove</button>
                                </div>
                            @endforeach

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary" id="addInsuranceButton">Add
                                    Insurance</button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonInsurance">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonInsurance">Save and
                                Next</button>
                        </div>
                    </div>


                    <!-- Investment Details -->
                    <!-- Investment Details -->
                    <div class="tab-pane fade" id="investment" role="tabpanel" aria-labelledby="investment-tab">
                        <h4>Investment Details</h4>
                        <div id="investmentDetailsContainer">
                            @foreach ($customer->investments as $index => $investment)
                                <div class="investment-block" id="investment-detail-{{ $index }}">
                                    <div class="row">
                                        <!-- Financial Institute Name -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="investment[{{ $index }}][financial_institute_name]"
                                                    class="form-label dpage5label">Financial Institute Name</label>
                                                <input type="text"
                                                    name="investment[{{ $index }}][financial_institute_name]"
                                                    id="investment[{{ $index }}][financial_institute_name]"
                                                    class="form-control dpage5input" placeholder="Enter institute name"
                                                    value="{{ old('investment.' . $index . '.financial_institute_name', $investment->financial_institute_name) }}">
                                            </div>
                                        </div>

                                        <!-- Type of Investment -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="investment[{{ $index }}][type_of_investment]"
                                                    class="form-label dpage5label">Type of Investment</label>
                                                <input type="text"
                                                    name="investment[{{ $index }}][type_of_investment]"
                                                    id="investment[{{ $index }}][type_of_investment]"
                                                    class="form-control dpage5input" placeholder="Enter investment type"
                                                    value="{{ old('investment.' . $index . '.type_of_investment', $investment->type_of_investment) }}">
                                            </div>
                                        </div>

                                        <!-- Investments (Monthly/Yearly) -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="investment[{{ $index }}][investments]"
                                                    class="form-label dpage5label">Investments</label>
                                                <select name="investment[{{ $index }}][investments]"
                                                    id="investment[{{ $index }}][investments]"
                                                    class="form-control dpage5input">
                                                    <option value="Monthly"
                                                        {{ old('investment.' . $index . '.investments', $investment->investments) == 'Monthly' ? 'selected' : '' }}>
                                                        Monthly</option>
                                                    <option value="Yearly"
                                                        {{ old('investment.' . $index . '.investments', $investment->investments) == 'Yearly' ? 'selected' : '' }}>
                                                        Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Start Date -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="investment[{{ $index }}][start_date]"
                                                    class="form-label dpage5label">Start Date</label>
                                                <input type="date" name="investment[{{ $index }}][start_date]"
                                                    id="investment[{{ $index }}][start_date]"
                                                    class="form-control dpage5input"
                                                    value="{{ old('investment.' . $index . '.start_date', $investment->start_date) }}">
                                            </div>
                                        </div>

                                        <!-- End Date -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="investment[{{ $index }}][end_date]"
                                                    class="form-label dpage5label">End Date</label>
                                                <input type="date" name="investment[{{ $index }}][end_date]"
                                                    id="investment[{{ $index }}][end_date]"
                                                    class="form-control dpage5input"
                                                    value="{{ old('investment.' . $index . '.end_date', $investment->end_date) }}">
                                            </div>
                                        </div>

                                        <!-- Comments -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="investment[{{ $index }}][comments]"
                                                    class="form-label dpage5label">Comments</label>
                                                <textarea name="investment[{{ $index }}][comments]" id="investment[{{ $index }}][comments]"
                                                    class="form-control dpage5input" placeholder="Enter comments">{{ old('investment.' . $index . '.comments', $investment->comments) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Remove Button -->
                                    <div class="row">
                                        <div class="col-lg-12 text-right">
                                            <button type="button" class="btn btn-danger remove-investment-btn"
                                                data-index="{{ $index }}">Remove</button>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary" id="addInvestmentButton">Add
                                    Investment</button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonInvestment">Back</button>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                    </div>






            </form>
        </div>

    </div>
    {{-- =============================================================================================== --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- ============================================================= --}}
    {{-- family  --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let familyMemberCount = {{ count($customer->family) }}; // Start from the current count

            document.getElementById('addFamilyMemberButton').addEventListener('click', function() {
                const newFamilyMemberRow = document.createElement('div');
                newFamilyMemberRow.className = 'row family-member';
                newFamilyMemberRow.id = 'family-member-' + familyMemberCount;

                newFamilyMemberRow.innerHTML = `
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="family[${familyMemberCount}][name]" class="form-label dpage5label">Family Member Name</label>
                        <input type="text" name="family[${familyMemberCount}][name]" id="family[${familyMemberCount}][name]" class="form-control dpage5input">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="family[${familyMemberCount}][DOB]">Date of Birth</label>
                        <input type="date" name="family[${familyMemberCount}][DOB]" id="family[${familyMemberCount}][DOB]" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="family[${familyMemberCount}][profession]">Profession</label>
                        <input type="text" name="family[${familyMemberCount}][profession]" id="family[${familyMemberCount}][profession]" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="family[${familyMemberCount}][relation]">Relation</label>
                        <select name="family[${familyMemberCount}][relation]" id="family[${familyMemberCount}][relation]" class="form-control">
                            <option value="">Select Relation</option>
                            <option value="Mother">Mother</option>
                            <option value="Father">Father</option>
                            <option value="Daughter">Daughter</option>
                            <option value="Son">Son</option>
                            <option value="Sibling">Sibling</option>
                            <option value="Cousin">Cousin</option>
                            <option value="Wife">Wife</option>
                            <option value="Husband">Husband</option>
                            <option value="Grandchild">Grandchild</option>
                            <option value="Grandmother">Grandmother</option>
                            <option value="Grandfather">Grandfather</option>
                            <option value="Sister-in-Law">Sister-in-Law</option>
                            <option value="Mother-in-Law">Mother-in-Law</option>
                            <option value="Father-in-Law">Father-in-Law</option>
                            <option value="Brother-in-Law">Brother-in-Law</option>
                            <option value="Nephew">Nephew</option>
                            <option value="Niece">Niece</option>
                            <option value="Uncle">Uncle</option>
                            <option value="Aunty">Aunty</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-1 mt-4">
                    <button type="button" class="btn btn-danger remove-family-member">×</button>
                </div>
            `;
                document.getElementById('familyMembersContainer').appendChild(newFamilyMemberRow);
                familyMemberCount++;
            });

            document.getElementById('familyMembersContainer').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-family-member')) {
                    event.target.closest('.family-member').remove();
                }
            });
        });
    </script>


    {{-- =================================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let loanCount = {{ $loanCount }}; // Start from existing loan count

            document.getElementById('addLoanButton').addEventListener('click', function() {
                // Create a new loan entry
                const newLoanEntry = document.createElement('div');
                newLoanEntry.className = 'loan-entry';
                newLoanEntry.id = 'loan-' + loanCount;

                newLoanEntry.innerHTML = `
                    <input type="hidden" name="loan[${loanCount}][id]" value="">
                    <div class="form-group">
                        <label>Type of Bank</label>
                        <input type="text" name="loan[${loanCount}][type_of_bank]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Loan Type</label>
                        <input type="text" name="loan[${loanCount}][loan_type]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Loan Amount</label>
                        <input type="number" step="0.01" name="loan[${loanCount}][loan_amount]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>EMI</label>
                        <input type="number" step="0.01" name="loan[${loanCount}][EMI]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" name="loan[${loanCount}][start_date]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="loan[${loanCount}][comment]" class="form-control"></textarea>
                    </div>
                    <button type="button" class="btn btn-danger remove-loan">Remove</button>
                `;

                // Append the new entry to the container
                document.getElementById('loanContainer').appendChild(newLoanEntry);
                loanCount++;

                // Add event listener for the remove button
                newLoanEntry.querySelector('.remove-loan').addEventListener('click', function() {
                    newLoanEntry.remove();
                });
            });
        });
    </script>
    {{-- ============================================================= --}}
    {{-- insucrance  --}}
    <script>
        // Add new insurance block
        let insuranceIndex = {{ count($customer->insurances) }};

        document.getElementById('addInsuranceButton').addEventListener('click', function() {
            const insuranceContainer = document.getElementById('insuranceDetailsContainer');
            const newInsuranceDetail = `
                <div class="row insurance-detail" id="insurance-detail-${insuranceIndex}">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="insurance[${insuranceIndex}][type_of_insurance_company]" class="form-label">Type of Insurance Company</label>
                            <input type="text" name="insurance[${insuranceIndex}][type_of_insurance_company]" class="form-control" placeholder="Enter insurance company type">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="insurance[${insuranceIndex}][type_of_policy]" class="form-label">Type of Policy</label>
                            <input type="text" name="insurance[${insuranceIndex}][type_of_policy]" class="form-control" placeholder="Enter policy type">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="insurance[${insuranceIndex}][premium]" class="form-label">Premium</label>
                            <input type="text" name="insurance[${insuranceIndex}][premium]" class="form-control" placeholder="Enter premium amount">
                        </div>
                    </div>
                </div>
                <div class="row insurance-detail" id="insurance-detail-${insuranceIndex}">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="insurance[${insuranceIndex}][policy_start_date]" class="form-label">Policy Start Date</label>
                            <input type="date" name="insurance[${insuranceIndex}][policy_start_date]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="insurance[${insuranceIndex}][policy_end_date]" class="form-label">Policy End Date</label>
                            <input type="date" name="insurance[${insuranceIndex}][policy_end_date]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="insurance[${insuranceIndex}][comment]" class="form-label">Comment</label>
                            <textarea name="insurance[${insuranceIndex}][comment]" class="form-control" placeholder="Enter your comment"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger remove-insurance">Remove</button>
                </div>
            `;
            insuranceContainer.insertAdjacentHTML('beforeend', newInsuranceDetail);
            insuranceIndex++;
        });

        // Remove insurance block
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-insurance')) {
                event.target.closest('.insurance-detail').remove();
            }
        });
    </script>
    {{-- ====================================================================== --}}
    {{-- investment --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let investmentIndex = {{ count($customer->investments) }};

            // Function to handle adding a new investment block
            document.getElementById('addInvestmentButton').addEventListener('click', function() {
                let newInvestment = `
                <div class="investment-block" id="investment-detail-${investmentIndex}">
                    <div class="row">
                        <!-- Financial Institute Name -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="investment[${investmentIndex}][financial_institute_name]" class="form-label dpage5label">Financial Institute Name</label>
                                <input type="text" name="investment[${investmentIndex}][financial_institute_name]" id="investment[${investmentIndex}][financial_institute_name]" class="form-control dpage5input" placeholder="Enter institute name">
                            </div>
                        </div>

                        <!-- Type of Investment -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="investment[${investmentIndex}][type_of_investment]" class="form-label dpage5label">Type of Investment</label>
                                <input type="text" name="investment[${investmentIndex}][type_of_investment]" id="investment[${investmentIndex}][type_of_investment]" class="form-control dpage5input" placeholder="Enter investment type">
                            </div>
                        </div>

                        <!-- Investments (Monthly/Yearly) -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="investment[${investmentIndex}][investments]" class="form-label dpage5label">Investments</label>
                                <select name="investment[${investmentIndex}][investments]" id="investment[${investmentIndex}][investments]" class="form-control dpage5input">
                                    <option value="Monthly">Monthly</option>
                                    <option value="Yearly">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Start Date -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="investment[${investmentIndex}][start_date]" class="form-label dpage5label">Start Date</label>
                                <input type="date" name="investment[${investmentIndex}][start_date]" id="investment[${investmentIndex}][start_date]" class="form-control dpage5input">
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="investment[${investmentIndex}][end_date]" class="form-label dpage5label">End Date</label>
                                <input type="date" name="investment[${investmentIndex}][end_date]" id="investment[${investmentIndex}][end_date]" class="form-control dpage5input">
                            </div>
                        </div>

                        <!-- Comments -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="investment[${investmentIndex}][comments]" class="form-label dpage5label">Comments</label>
                                <textarea name="investment[${investmentIndex}][comments]" id="investment[${investmentIndex}][comments]" class="form-control dpage5input" placeholder="Enter comments"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Remove Button -->
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <button type="button" class="btn btn-danger remove-investment-btn" data-index="${investmentIndex}">Remove</button>
                        </div>
                    </div>
                    <hr>
                </div>
            `;

                document.getElementById('investmentDetailsContainer').insertAdjacentHTML('beforeend',
                    newInvestment);
                investmentIndex++;
            });

            // Function to handle removal of investment blocks
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-investment-btn')) {
                    const index = event.target.getAttribute('data-index');
                    document.getElementById(`investment-detail-${index}`).remove();
                }
            });
        });
    </script>

    {{-- ============================================================================================ --}}
    <script>
        $(document).ready(function() {
            // Store the last active tab in local storage
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            // Get the last active tab and set it on page load
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('a[href="' + activeTab + '"]').tab('show');
            } else {
                // Default to the first tab if no tab is saved
                $('a[data-bs-toggle="tab"]').first().tab('show');
            }

            // Save form data on input change
            $('#combinedForm input, #combinedForm select, #combinedForm textarea').on('change', function() {
                saveFormData();
            });

            // Load data from local storage on page load
            loadFormData();

            // Function to save form data to local storage
            function saveFormData() {
                const formData = {};
                $('#combinedForm input, #combinedForm select, #combinedForm textarea').each(function() {
                    const name = $(this).attr('name');
                    if (name) {
                        formData[name] = $(this).val();
                    }
                });
                localStorage.setItem('combinedFormData', JSON.stringify(formData));
            }

            // Function to load form data from local storage
            function loadFormData() {
                const savedData = JSON.parse(localStorage.getItem('combinedFormData'));
                if (savedData) {
                    for (const key in savedData) {
                        const element = $('[name="' + key + '"]');
                        if (element.length) {
                            element.val(savedData[key]);
                        }
                    }
                }
            }

            // Clear local storage after form submission
            $('#combinedForm').on('submit', function() {
                // After successful form submission, clear local storage
                localStorage.removeItem('combinedFormData');
                localStorage.removeItem('activeTab');
            });
        });
    </script>

    <!-- Script to save and navigate -->
    <script>
        $(document).ready(function() {
            // Store the last active tab in local storage
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            // Get the last active tab and set it on page load
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('#detailsTabs a[href="' + activeTab + '"]').tab('show');
            }

            // Get all tabs
            var tabs = Array.from($('#detailsTabs .nav-link'));
            var currentIndex = tabs.findIndex(tab => $(tab).attr('href') ===
                `#${$('.tab-pane.show.active').attr('id')}`);

            // Save and Next Button handlers
            $('#saveNextButtonPersonal').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonProfessional').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonFinancial').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonInsurance').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonInvestment').click(function() {
                navigateTab(1);
            });

            // Back Button handlers
            $('#backButtonPersonal').click(function() {
                navigateTab(-1);
            });
            $('#backButtonProfessional').click(function() {
                navigateTab(-1);
            });
            $('#backButtonFinancial').click(function() {
                navigateTab(-1);
            });
            $('#backButtonInsurance').click(function() {
                navigateTab(-1);
            });
            $('#backButtonInvestment').click(function() {
                navigateTab(-1);
            });

            function navigateTab(direction) {
                // Determine new index based on direction
                currentIndex += direction;
                if (currentIndex >= 0 && currentIndex < tabs.length) {
                    $(tabs[currentIndex]).tab('show');
                    localStorage.setItem('activeTab', $(tabs[currentIndex]).attr('href'));
                }
            }
        });
    </script>
@endsection
