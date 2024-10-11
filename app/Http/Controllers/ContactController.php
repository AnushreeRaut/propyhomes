<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display all contacts
    public function index()
    {
        $contacts = Contact::orderByDesc('created_at')->get();
        return view('admin.newcustomer.index', compact('contacts'));
    }

    // Store a newly created contact
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email', // Specify the column for unique validation
            'phone' => 'required|string|max:15',
            'interest' => 'required|string',
        ]);

        // Attempt to create the contact
        try {
            Contact::create($request->all());

            // Redirect to the index page with a success message
            return redirect()->back()->with('success', 'Contact created successfully.');

        } catch (\Exception $e) {
            // Redirect back with a custom error message
            return redirect()->back()->with('error', 'Failed to create contact. Please try again.')->withInput();
        }
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
