<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'big_city_id', 'city_name', 'city_status'
    ];
}
