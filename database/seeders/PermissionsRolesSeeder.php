<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the permission ID and the role ID to assign to
        $permissionId = 4;
        $roleId = 3;

        // Insert permission-role relationship into the pivot table
        DB::table('permission_role')->insert([
            'role_id' => $roleId,
            'permission_id' => $permissionId,
        ]);
    }
}
