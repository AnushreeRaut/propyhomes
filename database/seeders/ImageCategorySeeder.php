<?php

namespace Database\Seeders;

use App\Models\ImageCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Cover Image', 'added_by' => 1, 'updated_by' => 1],
            ['category_name' => 'Elevation', 'added_by' => 1, 'updated_by' => 1],
            ['category_name' => 'Floor Plan', 'added_by' => 1, 'updated_by' => 1],
            ['category_name' => 'Banner', 'added_by' => 1, 'updated_by' => 1],
        ];

        foreach ($categories as $category) {
            ImageCategory::create($category);
        }
    }
}
