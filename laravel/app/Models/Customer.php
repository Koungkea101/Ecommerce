<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Customer extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates=['deleted_at'];

    protected $fillable=[
        'name',
        'email',
        'phone',
        'address',
    ];
    function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
    function orders(){
        return $this->hasMany(Order::class);
    }
    function payments(){
        return $this->hasMany(Payment::class);
    }
    function carts(){
        return $this->hasMany(Cart::class);
    }
    function products(){
        return $this->hasManyThrough(Product::class,Cart::class);
    }
}
