<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'marque', 'id', 'urlimg', 'name'
    ];
}
