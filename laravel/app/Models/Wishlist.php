<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use hasFactory;
    protected $fillable=[
        'product_id',
        'customer_id',
    ];
    function product(){
        return $this->belongsTo(Product::class);
    }
    function customer(){
        return $this->belongsTo(Customer::class);
    }
}
