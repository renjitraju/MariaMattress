<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
  
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',

    ];
}
