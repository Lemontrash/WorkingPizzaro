<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function item(){
        return $this->hasOne('Items');
    }
}
