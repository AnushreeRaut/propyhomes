<?php

namespace App\Http\Controllers;

use App\Models\PhoneRequest;
use Illuminate\Http\Request;

class PhoneRequestController extends Controller
{
    public function index()
    {
        $phoneRequests = PhoneRequest::orderByDesc('created_at')->get();
        return view('admin.phonerequest.index', compact('phoneRequests'));
    }

    public function store(Request $request)
    {
        // Validate phone number, including uniqueness
        $request->validate([
            'phone_number' => 'required|digits:10|unique:phone_requests,phone_number',
        ]);

        try {
            // Attempt to store the phone number in the database
            PhoneRequest::create([
                'phone_number' => $request->phone_number,
            ]);

            // Success message
            return redirect()->back()->with('success', 'Thank you for your number! We will get back to you soon');
        } catch (\Exception $e) {
            // Handle any exception that occurs during the database interaction
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again later.');
        }
    }



    public function destroy($id)
    {
        $phoneRequest = PhoneRequest::findOrFail($id);
        $phoneRequest->delete();

        return redirect()->route('phone_requests.index')->with('success', 'Phone request deleted successfully!');
    }
}
