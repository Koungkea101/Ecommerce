<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = [
            [
                'customer_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
            ],
            [
                'customer_id' => 1,
                'product_id' => 5,
                'quantity' => 1,
            ],
            [
                'customer_id' => 2,
                'product_id' => 3,
                'quantity' => 2,
            ],
            [
                'customer_id' => 3,
                'product_id' => 6,
                'quantity' => 1,
            ],
            [
                'customer_id' => 4,
                'product_id' => 1,
                'quantity' => 1,
            ],
        ];

        foreach ($carts as $cart) {
            Cart::create($cart);
        }
    }
}
