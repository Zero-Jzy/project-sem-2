<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class)->select(['first_name', 'last_name','avatar']);
    }

    protected $fillable = ['first_name','last_name','avatar','phone','age','gender','address'];
}
