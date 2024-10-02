<?php
namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
    public function register(Request $request) {
        // Validate the registration form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'nullable|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Generate the verification code
        $verificationCode = strtoupper(substr(md5(rand()), 0, 6));  // Generate a random 6-character code

        // Create the user (not verified yet)
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'verification_code' => $verificationCode,  // Store verification code in the database
            'is_verified' => false,  // User is unverified until they verify their account
        ]);

        // Send the verification code via email
        Mail::to($request->email)->send(new VerificationMail($user, $verificationCode));

        // Redirect to the form where the user can enter their verification code
        return redirect()->route('verify.code.form', ['email' => $request->email])
            ->with('success', 'A verification code has been sent to your email.');
    }

    // Show the form to enter the verification code
    public function showVerifyForm(Request $request) {
        return view('auth.verify', ['email' => $request->query('email')]);
    }

    // Verify the code entered by the user
    public function verifyCode(Request $request) {
        // Validate the verification code input
        $request->validate([
            'email' => 'required|email',
            'verification_code' => 'required|string|size:6',  // Code must be 6 characters
        ]);

        // Find the user with the matching email and verification code
        $user = User::where('email', $request->email)
                    ->where('verification_code', $request->verification_code)  // Compare stored and entered code
                    ->first();

        if (!$user) {
            return redirect()->back()->withErrors(['verification_code' => 'Invalid verification code.']);
        }

        // Mark the user as verified, clear the verification code, and activate the account
        $user->update([
            'verification_code' => null,  // Clear the code
            'is_verified' => true,  // Mark the user as verified
        ]);

        return redirect()->route('login')->with('success', 'Your account has been verified. You can now log in.');
    }
}
