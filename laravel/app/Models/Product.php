<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','pricing','description','images','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    function carts(){
        return $this->hasMany(Cart::class);
    }
    function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
    function order_products(){
        return $this->hasMany(OrderProduct::class);
    }

}
