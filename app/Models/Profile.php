<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    protected $fillable = ['first_name','last_name','avatar','phone','age','gender','address'];
}
