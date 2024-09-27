<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
 /**
     * Seed the application's database.
     */
    public function run()
    {
        // 1. Seed Roles
        $admin = Role::create(['role_name' => 'Admin']);
        $manager = Role::create(['role_name' => 'Manager']);
        $employee = Role::create(['role_name' => 'Employee']);
        $referral = Role::create(['role_name' => 'Referral']);
        $customer = Role::create(['role_name' => 'Customer']);

        // 2. Seed Permissions
        $permissions = [
            'view_dashboard',
            'view_referral',   // Permission to view referral-related routes
            'view_family',
            'view_employee',
            'view_projects',
            'view_phone',
            'view_reports',
            'view_customer',
            'view_index',
        ];

        foreach ($permissions as $permissionName) {
            Permission::create(['permission_name' => $permissionName]);
        }

        // 3. Attach Permissions to Roles
        // Attach all permissions to Admin
        $admin->permissions()->attach(Permission::pluck('id')->toArray());

        // Attach selected permissions to Manager
        $manager->permissions()->attach([
            1, // view_dashboard
            2, // view_referral
            3, // view_family
            4, // view_employee
            5, // view_projects
            6, // view_phone
            7, // view_reports
            8,  // 'view_index',
        ]);

        // Attach selected permissions to Employee
        $employee->permissions()->attach([
            1, // view_dashboard
            3, // view_family
            4, // view_employee
            8,  // 'view_index',
        ]);

        // Attach limited permissions to Referral
        $referral->permissions()->attach([
            1, // view_dashboard
            2, // view_referral
            8,  // 'view_index',
        ]);

        // Attach limited permission to Customer
        $customer->permissions()->attach([8]); //  8 'view_index',

        // 4. Seed Users and Assign Roles
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Admin',
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@example.com',
                'role' => 'Manager',
            ],
            [
                'name' => 'Employee User',
                'email' => 'employee@example.com',
                'role' => 'Employee',
            ],
            [
                'name' => 'Referral User',
                'email' => 'referral@example.com',
                'role' => 'Referral',
            ],
            [
                'name' => 'Customer User',
                'email' => 'customer@example.com',
                'role' => 'Customer',
            ],
        ];

        foreach ($users as $userData) {
            // Create user
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('password'), // Set default password to 'password'
            ]);

            // Assign role
            $role = Role::where('role_name', $userData['role'])->first();
            $user->role()->associate($role);
            $user->save();
        }
    }

}
