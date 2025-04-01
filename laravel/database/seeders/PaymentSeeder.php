<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'order_id' => 1,
                'customer_id' => 1,
                'amount' => 929.98,
                'payment_method' => 'credit_card',
            ],
            [
                'order_id' => 2,
                'customer_id' => 2,
                'amount' => 149.99,
                'payment_method' => 'paypal',
            ],
            [
                'order_id' => 3,
                'customer_id' => 3,
                'amount' => 1329.98,
                'payment_method' => 'credit_card',
            ],
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}
