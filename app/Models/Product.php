<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }

    public function journal()
    {
        return $this->belongsTo('App\Models\Journal');
    }
}
