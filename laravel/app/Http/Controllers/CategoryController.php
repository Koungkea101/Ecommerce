<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //Get /api/categories
    public function getCategories() {
        $categories = Category::all();

        // Return as JSON response
        return response()->json($categories);
    }

    // Post /api/categories
    public function createCategory(Request $request) {
        $category = Category::create([
            'name' => $request->input('name')
        ]);

        return response()->json([
            "message" => "Category created successfully",
            "category" => $category
        ], 201);
    }


    // get /api/categories/{categoryId}
    public function getCategory($categoryId) {
        // return ["message"=>"Get category with given categoryId: $categoryId"];
        $category = Category::find($categoryId);
        return response()->json($category);
    }

    public function updateCategory(Request $request, $categoryId) {
        $category = Category::find($categoryId);
        if(!$category) {
            return response()->json(["message"=>"Category not found"], 404);
        }
        $category->update($request->all());
        return response()->json(["message"=>"Category updated successfully", "category"=>$category]);


    // delete /api/categories/{categoryId}
    public function deleteCategory($categoryId) {
        return ["message"=>"Delete category with given categoryId: $categoryId"];
    }


}
