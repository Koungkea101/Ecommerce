<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wishlists = [
            [
                'customer_id' => 1,
                'product_id' => 6,
            ],
            [
                'customer_id' => 2,
                'product_id' => 1,
            ],
            [
                'customer_id' => 2,
                'product_id' => 2,
            ],
            [
                'customer_id' => 3,
                'product_id' => 4,
            ],
            [
                'customer_id' => 4,
                'product_id' => 5,
            ],
        ];

        foreach ($wishlists as $wishlist) {
            Wishlist::create($wishlist);
        }
    }
}
