<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Get /api/categories
    public function getCategories() {
        return ["message"=>"Get list of categories"];
    }

    // Post /api/categories
    public function createCategory() {
        return ["message"=>"Creating 1 newcategory"];
    }

    // get /api/categories/{categoryId}
    public function getCategory($categoryId) {
        return ["message"=>"Get category with given categoryId: $categoryId"];
    }

    // patch /api/categories/{categoryId}
    public function updateCategory($categoryId) {
        return ["message"=>"Update category with given categoryId: $categoryId"];
    }

    // delete /api/categories/{categoryId}
    public function deleteCategory($categoryId) {
        return ["message"=>"Delete category with given categoryId: $categoryId"];
    }


}
