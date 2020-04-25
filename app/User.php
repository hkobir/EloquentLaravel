<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name','email'
    ];
    
    public function phone(){                  //for join we define a user has one phone
        
        return $this->hasOne(Phone::class);
    }
}
