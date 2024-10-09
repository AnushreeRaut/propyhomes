<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $amenities = [
            ['name' => 'Swimming Pool', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Gym', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Parking', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Garden', 'added_by' => null, 'updated_by' => null],
            ['name' => '24/7 Security', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Elevator', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Clubhouse', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Play Area', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Wi-Fi', 'added_by' => null, 'updated_by' => null],
            ['name' => 'Laundry Service', 'added_by' => null, 'updated_by' => null],
        ];

        DB::table('property_amenities')->insert($amenities);
    }
}
