<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_id' => 1,
                'order_date' => now()->subDays(10)->format('d/m/Y H:i:s'),
                'total_price' => 929.98,
            ],
            [
                'customer_id' => 2,
                'order_date' => now()->subDays(7)->format('d/m/Y H:i:s'),
                'total_price' => 149.99,
            ],
            [
                'customer_id' => 3,
                'order_date' => now()->subDays(5)->format('d/m/Y H:i:s'),
                'total_price' => 1329.98,
            ],
            [
                'customer_id' => 4,
                'order_date' => now()->subDays(2)->format('d/m/Y H:i:s'),
                'total_price' => 59.99,
            ],
            [
                'customer_id' => 5,
                'order_date' => now()->subDays(1)->format('d/m/Y H:i:s'),
                'total_price' => 39.99,
            ],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
