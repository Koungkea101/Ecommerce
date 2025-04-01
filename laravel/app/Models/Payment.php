<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates=['deleted_at'];


    protected $fillable=[
        'order_id',
        'amount',
        'payment_method',
        'customer_id',
    ];

    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function order(){
        return $this->belongsTo(Order::class);
    }
}
