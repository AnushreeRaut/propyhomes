<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Landmarks array (replace area_id with your actual area IDs)
        $landmarks = [
            ['name' => 'Sitabuldi Fort', 'area_id' => 2], // area_id is an example
            ['name' => 'Seminary Hills', 'area_id' => 18],
        ];

        // Insert landmarks into the landmarks table
        DB::table('landmarks')->insert($landmarks);
    }
}
