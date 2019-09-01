<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
