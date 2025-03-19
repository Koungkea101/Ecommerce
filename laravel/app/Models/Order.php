<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Order extends Model
{
    use hasFactory, SoftDeletes;

    protected $table='orders';
    protected $dates=['deleted_at'];

    protected $fillable=[
        'customer_id',
        'total_price',
        'order_date',
    ];


    function payment(){
        return $this->hasOne(Payment::class);
    }
    function customer(){
        return $this->belongsTo(Customer::class);
    }
    function order_products(){
        return $this->hasMany(OrderProduct::class);
    }

    protected function orderDate(): Attribute
    {
        return Attribute::make(
            //Mutator: convert user format to mysql format
            set: fn ($value) => Carbon::createFromFormat('d/m/Y H:i:s', $value)->format('Y-m-d H:i:s'),
            //Accessor: convert mysql format to user format
            get: fn ($value) => Carbon::parse($value)->format('d/m/Y H:i:s')
        );

    }
}
