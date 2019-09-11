<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    public function foods(){
        return $this->belongstoMany(Food::class,'food_category','category_id','food_id');
    }
}
