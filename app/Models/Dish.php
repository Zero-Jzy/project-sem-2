<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function sets(){
        return $this->belongsToMany(Set::class, 'dish_set','dish_id','set_id');
    }

    public function dish_category(){
        return $this->belongsTo(DishCategory::class);
    }

}
