<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Clothing'],
            ['name' => 'Books'],
            ['name' => 'Home & Kitchen'],
            ['name' => 'Sports & Outdoors'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
