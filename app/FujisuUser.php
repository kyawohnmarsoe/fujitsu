<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FujisuUser extends Model
{
    protected $fillable = [
        'name', 'phone', 'email',
    ];
}
