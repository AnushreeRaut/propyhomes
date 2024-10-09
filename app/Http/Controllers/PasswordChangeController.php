<?php

namespace App\Http\Controllers;

use App\Mail\SendOTP;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordChangeController extends Controller
{
    // Send OTP for password update
    public function sendOTP(Request $request, $employee_id)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Find the employee by ID
        $employee = User::findOrFail($employee_id);

        // Generate OTP
        $otp_code = Str::random(6);
        $employee->otp_code = $otp_code;
        $employee->save();

        // Send OTP to the employee's email
        Mail::to($employee->email)->send(new SendOTP($otp_code));

        // Store the new password temporarily in session
        session(['new_password' => $request->password, 'employee_id' => $employee_id]);

        // Redirect to OTP verification form
        return redirect()->route('otp.verify.form', ['employee_id' => $employee_id]);
    }


    // Show OTP verification form
    public function showOTPForm($employee_id)
    {
        return view('admin.employee.passwordverify', ['employee_id' => $employee_id]);
    }

    // Verify OTP and update password
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp_code' => 'required|string',
            'employee_id' => 'required|integer'
        ]);

        // Find the employee by ID
        $employee = User::findOrFail($request->employee_id);

        // Check if the entered OTP matches
        if ($employee->otp_code === $request->otp_code) {
            // Update password from session
            $employee->password = Hash::make(session('new_password'));
            $employee->otp_code = null; // Clear OTP after successful verification
            $employee->save();

            // Clear session data
            session()->forget(['new_password', 'employee_id']);

            return redirect()->route('dashboard')->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid OTP. Please try again.');
        }
    }

}
