<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    
    protected $fillable = [
        'name', 'email', 'phone' ,'subject' ,'password',
    ];

   
}
