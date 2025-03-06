<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CategoryController::class)->prefix('categories')->group(function () {
    Route::get('/', 'getCategories');
    Route::post('/', 'createCategory');
    Route::get('/{categoryId}', 'getCategory');
    Route::put('/{categoryId}', 'updateCategory');
    Route::delete('/{categoryId}', 'deleteCategory');
});

Route::controller(ProductController::class)->prefix('products')->group(function () {
    Route::get('/', 'getProducts');
    Route::post('/', 'createProduct');
    Route::get('/{productId}', 'getProduct');
    Route::put('/{productId}', 'updateProduct');
    Route::delete('/{productId}', 'deleteProduct');
});

// Route::resource('categories', CategoryController::class)->withoutMiddleware([\App\Http\Middleware\Authenticate::class]);
// Route::resource('products', ProductController::class)->withoutMiddleware([\App\Http\Middleware\Authenticate::class]);
Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('/categories', [CategoryController::class, 'getCategories']);
