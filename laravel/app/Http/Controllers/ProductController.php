<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Get /api/products
    public function getProducts() {
        return ["message"=>"Get list of products"];
    }

    //Post /api/products
    public function createProduct() {
        return ["message"=>"Creating 1 new product"];
    }

    //get /api/products/{productId}
    public function getProduct($productId) {
        return ["message"=>"Get product with given productId: $productId"];
    }

    //patch /api/products/{productId}
    public function updateProduct($productId) {
        return ["message"=>"Update product with given productId: $productId"];
    }

    //delete /api/products/{productId}
    public function deleteProduct($productId) {
        return ["message"=>"Delete product with given productId: $productId"];
    }
}
