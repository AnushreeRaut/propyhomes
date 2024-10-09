<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for property_locations
        $propertyLocations = [
            [
                'city_id' => 1, // Example city_id, ensure this exists in your cities table
                'state_id' => 1, // Example state_id, ensure this exists in your states table
                'country_id' => 1, // Example country_id, ensure this exists in your countries table
                'area_id' => 1, // Example area_id, ensure this exists in your areas table
                'landmark_id' => 1, // Example landmark_id, ensure this exists in your landmarks table
            ],
        ];

        // Insert data into property_locations table
        DB::table('property_locations')->insert($propertyLocations);
    }
}
