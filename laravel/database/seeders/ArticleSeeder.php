<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Hello World',
            'content' => 'This is the first article',
            'author_id' => 1,
        ]);
        Article::create([
            'title' => 'Bye World',
            'content' => 'This is the first article',
            'author_id' => 1,
        ]);
        Article::create([
            'title' => 'This is awesome',
            'content' => 'This is the first article',
            'author_id' => 2,
        ]);
    }
}