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
    public function run()
    {
        // Create Roles
        $admin = Role::create(['role_name' => 'Admin']);
        $manager = Role::create(['role_name' => 'Manager']);
        $employee = Role::create(['role_name' => 'Employee']);
        $referral = Role::create(['role_name' => 'Referral']);
        $customer = Role::create(['role_name' => 'Customer']);

        // Create Permissions
        $permissions = [
            'view_dashboard',
            'manage_users',
            'create_posts',
            'edit_posts',
            'delete_posts',
            'view_reports',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['permission_name' => $permission]);
        }

        // Attach permissions to roles
        $admin->permissions()->attach([1, 2, 3, 4, 5, 6]); // All permissions
        $manager->permissions()->attach([1, 3, 4, 5, 6]); // Manager permissions
        $employee->permissions()->attach([1, 3]); // Employee permissions
        $referral->permissions()->attach([1]); // Referral permissions
        $customer->permissions()->attach([1]); // Customer permissions
    }
}
