<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    function sets(){
        return $this->belongsToMany(Set::class,'food_set','food_id','set_id');
    }

    function category(){
        return $this->belongsTo(FoodCategory::class);
    }
}
