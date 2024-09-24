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

     // Handle login request
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

             // Redirect to the intended page
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
         Auth::logout();

         $request->session()->invalidate();
         $request->session()->regenerateToken();

         return redirect('/login');
     }

}
