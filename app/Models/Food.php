<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    function sets(){
        return $this->belongstoMany(Set::class,'food_set','food_id','set_id')
            ->withPivot('quantity');
    }

    function category(){
        return $this->belongstoMany(FoodCategory::class);
    }
}
