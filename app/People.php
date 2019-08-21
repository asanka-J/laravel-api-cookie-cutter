<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'city',

    ];
}
