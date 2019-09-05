<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    function foods(){
        return $this->hasMany(Food::class);
    }
}
