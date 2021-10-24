<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diocese extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }

    public function news()
    {
        return $this->hasMany('App\Models\News');
    }

}
