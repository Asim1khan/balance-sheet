<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

}
