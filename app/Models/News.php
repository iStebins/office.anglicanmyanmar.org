<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','paragraph','diocese_id','image'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function diocese()
    {
        return $this->belongsTo('App\Models\Diocese');
    }

}
