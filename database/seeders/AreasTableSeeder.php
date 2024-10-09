<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Localities array
        $areas = [
            ['area_name' => 'Mahal'],
            ['area_name' => 'Sitabuldi'],
            ['area_name' => 'Ganesh Peth colony'],
            ['area_name' => 'Dhantoli'],
            ['area_name' => 'Trimurti Nagar'],
            ['area_name' => 'Itwari'],
            ['area_name' => 'Mominpura'],
            ['area_name' => 'Dharampeth'],
            ['area_name' => 'Ramdaspeth'],
            ['area_name' => 'Shraddhanand Peth'],
            ['area_name' => 'Sadar'],
            ['area_name' => 'Civil Lines'],
            ['area_name' => 'Chinchbhuvan'],
            ['area_name' => 'Gandhibagh'],
            ['area_name' => 'Nandanvan'],
            ['area_name' => 'Kalamna'],
            ['area_name' => 'Wardhaman Nagar'],
            ['area_name' => 'Seminary Hills'],
            ['area_name' => 'Police Line Takli'],
            ['area_name' => 'Mankapur'],
            ['area_name' => 'Pachpaoli'],
            ['area_name' => 'Vayusena Nagar'],
            ['area_name' => 'Ravi Nagar'],
            ['area_name' => 'Byramji Town'],
            ['area_name' => 'Chaoni'],
            ['area_name' => 'Mangalwari'],
            ['area_name' => 'Gaddi Godam'],
            ['area_name' => 'Gitti Khadan'],
            ['area_name' => 'Pratap Nagar'],
            ['area_name' => 'Ajni'],
            ['area_name' => 'Pardi'],
            ['area_name' => 'Indora'],
            ['area_name' => 'Maskasath'],
            ['area_name' => 'Jaitala'],
            ['area_name' => 'Jaripatka'],
            ['area_name' => 'Kapil Nagar'],
            ['area_name' => 'Ashok Nagar'],
            ['area_name' => 'Gokulpeth'],
            ['area_name' => 'Giripeth'],
            ['area_name' => 'Bajaj Nagar'],
            ['area_name' => 'Rajendra Nagar'],
            ['area_name' => 'Lakadganj'],
            ['area_name' => 'Gandhinagar'],
            ['area_name' => 'Manish Nagar'],
            ['area_name' => 'Bezanbagh'],
            ['area_name' => 'Bhandewadi'],
            ['area_name' => 'Rahate Colony'],
            ['area_name' => 'New Pawan Shakti Nagar'],
            ['area_name' => 'Jafar Nagar'],
            ['area_name' => 'Friends Colony'],
            ['area_name' => 'Baba Farid Nagar'],
            ['area_name' => 'Suyog Nagar'],
            ['area_name' => 'Sahyog Nagar']
        ];

        // Insert localities into the areas table
        DB::table('areas')->insert($areas);
    }
}
