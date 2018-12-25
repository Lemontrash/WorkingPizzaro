<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use SoftDeletes;
    public function product(){
        return $this->belongsToMany(Products::class);
    }
}
