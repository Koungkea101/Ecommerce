<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //Get /api/categories
    public function getCategories()
    {
        $categories = Category::all();
        return response()->json(['categories' => $categories]);
    }

    // Post /api/categories
    public function createCategory(Request $request) {
        // return ["message"=>"Creating 1 newcategory"];
        $category = Category::create([
            'name' => $request->input('name'),
        ]);

        // Return a success message with the created category data
        return response()->json([
            'message' => 'Category created successfully!',
            'category' => $category
        ], 201);

    }

    // get /api/categories/{categoryId}
    public function getCategory($categoryId) {
        // return ["message"=>"Get category with given categoryId: $categoryId"];
        {
            try {
                $category = Category::findOrFail($categoryId);
            } catch (ModelNotFoundException $e) {
                return response()->json(["message" => "Category not found"], 404);
            }

            return response()->json($category);
        }
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
