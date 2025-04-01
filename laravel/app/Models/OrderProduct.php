<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'order_products';
    protected $dates=['deleted_at'];

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
