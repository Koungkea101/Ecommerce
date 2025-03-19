<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use hasFactory;
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
