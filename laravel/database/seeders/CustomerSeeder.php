<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Main St, Anytown, CA 94000',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '234-567-8901',
                'address' => '456 Oak Ave, Somewhere, NY 10001',
            ],
            [
                'name' => 'Robert Johnson',
                'email' => 'robert.johnson@example.com',
                'phone' => '345-678-9012',
                'address' => '789 Pine Rd, Nowhere, TX 75001',
            ],
            [
                'name' => 'Sarah Williams',
                'email' => 'sarah.williams@example.com',
                'phone' => '456-789-0123',
                'address' => '321 Elm Blvd, Anywhere, WA 98001',
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'phone' => '567-890-1234',
                'address' => '654 Maple Dr, Everywhere, FL 33001',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
