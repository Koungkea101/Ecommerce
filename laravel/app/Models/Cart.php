<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'customer_id',
        'quantity',
    ];

    function product(){
        return $this->belongsTo(Product::class);
    }
    function customer(){
        return $this->belongsTo(Customer::class);
    }
}
