<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Auth;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch active references and order by a specific column in descending order
        $references = Reference::active()->orderBy('created_at', 'desc')->get();

        // Pass the references to the view
        return view('admin.reference.index', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reference.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'nullable|string',
            'real_estate' => 'nullable|boolean',
            'loan' => 'nullable|boolean',
            'real_estate_type' => 'nullable|in:buy,sell,rent,other',
            'loan_type' => 'nullable|in:personal loan,housing loan,loan for business,other',
            'comment' => 'nullable|string',
        ]);

        try {
            // Create a new Reference
            $reference = new Reference([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'real_estate' => $request->real_estate,
                'loan' => $request->loan,
                'real_estate_type' => $request->real_estate_type,
                'loan_type' => $request->loan_type,
                'comment' => $request->comment,
                'added_by' => Auth::id(), // Assuming the user is authenticated
                'is_delete' => false, // default value
            ]);

            $reference->save();

            return redirect()->route('references.index')->with('success', 'Reference created successfully!');
        } catch (\Exception $e) {
            // Return with error if something goes wrong
            return back()
                ->withInput()
                ->withErrors('Error creating the reference: ' . $e->getMessage());
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the existing Reference by ID
        $reference = Reference::findOrFail($id);

        // Return the view with the reference data
        return view('admin.reference.edit', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'nullable|string',
            'real_estate' => 'nullable|boolean',
            'loan' => 'nullable|boolean',
            'real_estate_type' => 'nullable|in:buy,sell,rent,other',
            'loan_type' => 'nullable|in:personal loan,housing loan,loan for business,other',
            'comment' => 'nullable|string',
        ]);

        try {
            // Find the existing Reference
            $reference = Reference::findOrFail($id);

            // Update the Reference
            $reference->update([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'real_estate' => $request->real_estate,
                'loan' => $request->loan,
                'real_estate_type' => $request->real_estate_type,
                'loan_type' => $request->loan_type,
                'comment' => $request->comment,
                'updated_by' => Auth::id(), // Assuming the user is authenticated
            ]);

            return redirect()->route('references.index')->with('success', 'Reference updated successfully!');
        } catch (\Exception $e) {
            // Return with error if something goes wrong
            return back()
                ->withInput()
                ->withErrors('Error updating the reference: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the reference by ID
            $reference = Reference::findOrFail($id);

            // Soft delete by setting is_delete to true
            $reference->update(['is_delete' => true]);

            return redirect()->route('references.index')->with('success', 'Reference deleted successfully!');
        } catch (\Exception $e) {
            // Return with error if something goes wrong
            return back()->withErrors('Error deleting the reference: ' . $e->getMessage());
        }
    }
}
