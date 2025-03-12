<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'user_id' => 1,
            'article_id' => 1,
            'content' => 'This is a comment',
        ]);
        Comment::create([
            'user_id' => 1,
            'article_id' => 2,
            'content' => 'Another comment',
        ]);
        Comment::create([
            'user_id' => 1,
            'article_id' => 2,
            'content' => 'And another comment',
        ]);
    }
}