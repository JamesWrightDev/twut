<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twut extends Model
{
    //
    protected $fillable = [
        'body', 'user_id',
    ];
}
