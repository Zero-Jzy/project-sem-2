<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['name','phone','email','slug','addressTxt','profile_id'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
