<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function journal()
    {
        return $this->hasOne('App\Models\Journal');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Products');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
