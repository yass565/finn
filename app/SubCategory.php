<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id', 'sub_category_name', 'img', 'car_type', 'statuss', 'insert_date_time'
    ];
}
