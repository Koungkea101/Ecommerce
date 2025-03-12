<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles() {
        return ['message' => 'This is a list of articles'];
    }
    public function createArticle(Request $request) {
        return ['message' => 'Article created'];
    }
    public function updateArticle(Request $request, $id) {
        return ['message' => 'Article updated'];
    }
    public function deleteArticle($id) {
        return ['message' => 'Article deleted'];
    }
}