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
        $request->validate([
            'phone_number' => 'required|digits:10',
        ]);

        PhoneRequest::create([
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->back()->with('success', 'Thank you for number! We will get back to you soon');
    }

    public function destroy($id)
    {
        $phoneRequest = PhoneRequest::findOrFail($id);
        $phoneRequest->delete();

        return redirect()->route('phone_requests.index')->with('success', 'Phone request deleted successfully!');
    }
}
