<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Smartphone X',
                'description' => 'Latest smartphone with advanced features',
                'pricing' => 899.99,
                'images' => json_encode(['smartphone1.jpg', 'smartphone2.jpg']),
                'category_id' => 1, // Electronics
            ],
            [
                'name' => 'Laptop Pro',
                'description' => 'High-performance laptop for professionals',
                'pricing' => 1299.99,
                'images' => json_encode(['laptop1.jpg']),
                'category_id' => 1, // Electronics
            ],
            [
                'name' => 'Designer T-Shirt',
                'description' => 'Premium cotton t-shirt with modern design',
                'pricing' => 29.99,
                'images' => json_encode(['tshirt1.jpg', 'tshirt2.jpg']),
                'category_id' => 2, // Clothing
            ],
            [
                'name' => 'Classic Novel Collection',
                'description' => 'Set of 5 classic novels in hardcover',
                'pricing' => 59.99,
                'images' => json_encode(['books1.jpg']),
                'category_id' => 3, // Books
            ],
            [
                'name' => 'Coffee Maker Deluxe',
                'description' => 'Programmable coffee maker with built-in grinder',
                'pricing' => 149.99,
                'images' => json_encode(['coffeemaker1.jpg', 'coffeemaker2.jpg']),
                'category_id' => 4, // Home & Kitchen
            ],
            [
                'name' => 'Yoga Mat Premium',
                'description' => 'Extra thick yoga mat with carry strap',
                'pricing' => 39.99,
                'images' => json_encode(['yogamat1.jpg']),
                'category_id' => 5, // Sports & Outdoors
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
