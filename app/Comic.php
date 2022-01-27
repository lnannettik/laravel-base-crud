<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //Mass assignement
    protected $fillable = [
        'title',
        'description',
        'type',
        'thumb',
        'price',
        'series',
        'sale_date'
    ];
}
