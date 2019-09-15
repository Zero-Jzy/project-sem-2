<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['address_id', 'user_id', 'amount', 'type'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sets()
    {
        return $this->belongsToMany(Set::class, 'order_detail', 'order_id', 'set_id')
            ->withPivot('quantity');
    }

}
