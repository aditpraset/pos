<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Food',
                'description' => 'Edible items and meals',
            ],
            [
                'name' => 'Beverage',
                'description' => 'Drinks and refreshments',
            ],
            [
                'name' => 'Snacks',
                'description' => 'Light meals and treats',
            ],
            [
                'name' => 'Dessert',
                'description' => 'Sweet courses at the end of a meal',
            ],
             [
                'name' => 'Other',
                'description' => 'Miscellaneous items',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
