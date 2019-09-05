<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_detail', 'set_id', 'order_id');
    }

    public function dish(){
        return $this->belongsToMany(Food::class, 'food_set','set_id','food_id');
    }

    public function set_category(){
        return $this->belongsTo(SetCategory::class);
    }


}
