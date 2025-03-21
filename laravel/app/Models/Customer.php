<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'address',
    ];
    function orders(){
        return $this->hasMany(Order::class);
    }
    function payments(){
        return $this->hasMany(Payment::class);
    }
    function carts(){
        return $this->hasManyThrough(Cart::class,Product::class);
    }
}
