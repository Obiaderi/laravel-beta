<?php

namespace Database\Seeders;

use App\Models\AdsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdsCategory::create([
            'name' => 'Electronics',
            'image_url' => 'https://via.placeholder.com/150',
        ]);

        AdsCategory::create([
            'name' => 'Cars',
            'image_url' => 'https://via.placeholder.com/150',
        ]);

        AdsCategory::create([
            'name' => 'Real Estate',
            'image_url' => 'https://via.placeholder.com/150',
        ]);

        AdsCategory::create([
            'name' => 'Furniture',
            'image_url' => 'https://via.placeholder.com/150',
        ]);
    }
}