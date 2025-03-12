<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTD extends Model
{
    //
}
public function courses()
{
    return $this->belongsToMany(Course::class);
}
public function payments()
{
    return $this->hasMany(Payment::class);
}
public function certificate()
{
    return $this->hasOne(Certificate::class);
}
