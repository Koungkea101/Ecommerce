<?php

namespace Database\Seeders;

use App\Models\OrderProduct;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderProducts = [
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 899.99,
            ],
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 1,
                'price' => 29.99,
            ],
            [
                'order_id' => 2,
                'product_id' => 5,
                'quantity' => 1,
                'price' => 149.99,
            ],
            [
                'order_id' => 3,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 1299.99,
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 1,
                'price' => 29.99,
            ],
            [
                'order_id' => 4,
                'product_id' => 4,
                'quantity' => 1,
                'price' => 59.99,
            ],
            [
                'order_id' => 5,
                'product_id' => 6,
                'quantity' => 1,
                'price' => 39.99,
            ],
        ];

        foreach ($orderProducts as $orderProduct) {
            OrderProduct::create($orderProduct);
        }
    }
}
