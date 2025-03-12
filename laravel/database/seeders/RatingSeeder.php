<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rating::create([
            'user_id' => 1,
            'article_id' => 1,
            'rating' => 5,
        ]);
        Rating::create([
            'user_id' => 1,
            'article_id' => 2,
            'rating' => 4,
        ]);
        Rating::create([
            'user_id' => 1,
            'article_id' => 2,
            'rating' => 3,
        ]);
    }
}