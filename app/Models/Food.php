<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    function sets(){
        return $this->belongstoMany(
            Set::class,
            'food_set',
            'food_id',
            'set_id'
        )->withPivot('quantity');
    }

    function categories(){
        return $this->belongstoMany(
            FoodCategory::class,
            'category_food',
            'food_id',
            'category_id'
        );
    }
}
