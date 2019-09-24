<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{

    protected $fillable = ['name', 'type', 'category_id','image', 'price'];

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_detail', 'set_id', 'order_id')
            ->withPivot('quantity');
    }

    public function foods(){
        return $this->belongsToMany(Food::class, 'food_set','set_id','food_id')
            ->withPivot('quantity');
    }
    public function category(){
        return $this->belongsTo(SetCategory::class);
    }

}
