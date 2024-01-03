<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'title' => 'Motorcycle',
                'status' => 1,
                'created_by' => 1
            ],
            [
                'id' => 2,
                'title' => 'Car',
                'status' => 1,
                'created_by' => 1

            ],
            [
                'id' => 3,
                'title' => 'Scooter',
                'status' => 1,
                'created_by' => 1

            ],
        ];

        foreach ($categories as $category) {
            ProductCategory::updateOrCreate(['id' => $category['id']], $category);
        }
    }
}
