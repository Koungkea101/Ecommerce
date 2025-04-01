<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates=['deleted_at'];

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
