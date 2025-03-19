<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable=[
        'model',
        'model_id',
        'action',
        'changes',
    ];
    //ensure changes is a JSON (array)
    protected $casts=[
        'changes'=>'array',
    ];
}
