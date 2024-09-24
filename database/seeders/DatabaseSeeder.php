<?php

namespace Database\Seeders;

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
    public function run(): void
    {
        // Seed roles
        $roles = [
            [
                'role_name' => 'Admin',
                'description' => 'Administrator with full access rights',
                'added_by' => 1,
            ],
            [
                'role_name' => 'Manager',
                'description' => 'Manager with access to managerial functionalities',
                'added_by' => 1,
            ],
            [
                'role_name' => 'Employee',
                'description' => 'Standard employee role with limited access',
                'added_by' => 1,
            ],
        ];

        foreach ($roles as $roleData) {
            Role::create($roleData);
        }

        // Retrieve the roles for assignment
        $adminRole = Role::where('role_name', 'Admin')->first();
        $managerRole = Role::where('role_name', 'Manager')->first();
        $employeeRole = Role::where('role_name', 'Employee')->first();

        // Seed users
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'mobile' => '1234567890',
                'password' => Hash::make('password'),
                'added_by' => 1,
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@example.com',
                'mobile' => '1234567891',
                'password' => Hash::make('password'),
                'added_by' => 1,
            ],
            [
                'name' => 'Employee User',
                'email' => 'employee@example.com',
                'mobile' => '1234567892',
                'password' => Hash::make('password'),
                'added_by' => 1,
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
