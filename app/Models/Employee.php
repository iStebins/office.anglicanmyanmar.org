<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function diocese()
    {
        return $this->belongsTo('App\Models\Diocese');
    }

    public function parish()
    {
        return $this->belongsTo('App\Models\Parish');
    }

}
