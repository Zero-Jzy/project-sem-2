<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetCategory extends Model
{
    public function sets(){
        return $this->hasMany(Set::class);
    }
}




