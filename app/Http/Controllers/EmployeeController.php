<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
   // Display a listing of the users
   public function index()
   {
       $employees = User::all();
       return view('admin.employee.index', compact('employees'));
   }
   public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

   // Show the form for creating a new user
   public function create()
    {
        $roles = Role::all(); // Get roles to display in the form
        return view('admin.employee.create', compact('roles'));
    }

   // Store a newly created user in storage
   public function store(Request $request)
   {
       // Validate the request
       $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|email|unique:users',
           'password' => 'required|string|min:8',
       ]);

       try {
           // Attempt to create the user
           User::create([
               'name' => $request->name,
               'email' => $request->email,
               'password' => Hash::make($request->password),
               'mobile' => $request->mobile,
               'department' => $request->department,
               'team' => $request->team,
               'role_id' => $request->role_id,
               'added_by' => auth()->id(),
           ]);

           // Redirect with success message
           return redirect()->route('employees.index')->with('success', 'User created successfully');
       } catch (\Exception $e) {
           // If there's an error, catch it and return to the form with an error message
           return redirect()->back()->with('error', 'An error occurred while creating the user: ' . $e->getMessage());
       }
   }


   public function edit($id)
   {
       $user = User::findOrFail($id);
       $roles = Role::all(); // Assuming you have a Role model
       return view('admin.employee.edit', compact('user', 'roles'));
   }

    // Method to handle the update request
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile' => 'nullable|string',
            'department' => 'nullable|string',
            'team' => 'nullable|string',
            'role_id' => 'nullable|exists:roles,id',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'department' => $request->department,
            'team' => $request->team,
            'role_id' => $request->role_id,
            'updated_by' => auth()->id(), // Storing who updated the user
        ]);

        return redirect()->route('employees.index')->with('success', 'User updated successfully.');
    }
   // Remove the specified user from storage
   public function destroy(User $user)
   {
       $user->delete();
       return redirect()->route('employees.index')->with('success', 'User deleted successfully');
   }
}
