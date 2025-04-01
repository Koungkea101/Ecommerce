<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        // Call all seeders in the correct order
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
            CartSeeder::class,
            WishlistSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
