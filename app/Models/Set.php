<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_detail', 'set_id', 'order_id');
    }

    public function dishes(){
        return $this->belongsToMany(Set::class);
    }

    public function set_category(){
        return $this->belongsTo(SetCategory::class);
    }
}
