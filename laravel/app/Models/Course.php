<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
}
public function users()
{
    return $this->belongsToMany(User::class);
}
public function lessons()
{
    return $this->hasMany(Lesson::class);
}
public function certificate()
{
    return $this->hasOne(Certificate::class);
}
