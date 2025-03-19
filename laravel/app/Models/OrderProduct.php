<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use hasFactory;
    protected $fillable=[
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    function product(){
        return $this->belongsTo(Product::class);
    }
    function order(){
        return $this->belongsTo(Order::class);
    }
}
