<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UploadController;

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

Route::controller(CartController::class)->prefix('carts')->group(function () {
    Route::get('/', 'getCarts');
    Route::post('/', 'createCart');
    Route::get('/{cartId}', 'getCart');
    Route::put('/{cartId}', 'updateCart');
    Route::delete('/{cartId}', 'deleteCart');
});

Route::controller(UploadController::class)->group(function () {
    // MinIO routes
    Route::post('/upload', 'uploadToMinio');
    Route::get('/images/{filename}', 'getFromMinio');
    Route::get('/images/thumbnail/{filename}', 'getFromMinio')->defaults('type', 'thumbnail');
});

