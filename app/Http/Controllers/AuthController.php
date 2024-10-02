<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     // Show login form
     public function showLoginForm()
     {
         return view('auth.login');  // Ensure you have a login view
     }

     public function dashboard()
     {
         return view('admin.dashboard');  // Ensure you have a login view
     }



    public function login(Request $request)
    {
        // Validate the form inputs
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Get the authenticated user
            $user = Auth::user();

            // Check the role_id of the user (assuming 5 is the role_id for 'customer')
            if ($user->role_id == 5) { // Replace 5 with the actual role_id for 'customer'
                // Set a success message for customers
                session()->flash('success', 'Thank you for logging in! Please check out our properties.');

                // Redirect customer to the lotus page
                return redirect()->route('viewlotus');
            }

            // Set a success message for other roles
            session()->flash('success', 'Welcome to the dashboard!');

            // Redirect other roles to the dashboard
            return redirect()->intended('/dashboard');
        }

        // If authentication fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    // Logout user
    public function logout(Request $request)
    {
        // Get the authenticated user before logging out
        $user = Auth::user();

        // Log the user out
        Auth::logout();

        // Invalidate the session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Check the role_id of the user (assuming 5 is the role_id for 'customer')
        if ($user && $user->role_id == 5) { // Replace 5 with the actual role_id for 'customer'
            // Redirect customer to the index page with a message
            return redirect('/')->with('success', 'Please visit us again!');
        }

        // Redirect other roles to the login page with a success message
        return redirect('/login')->with('success', 'You have logged out successfully.');
    }



}
