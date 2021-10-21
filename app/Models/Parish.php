<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone','service_time', 'address', 'diocese_if', 'congeregation', 'weekely_attendance', 'dedication', 'image', 'map', 'history'];

    public function diocese()
    {
        return $this->belongsTo('App\Models\Diocese');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
