<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable = [
        'category_id', 'sub_category_id', 'big_city_id', 'city_id', 'title',
        'price', 'short_desc', 'multi_image', 'description',
        'specification', 'other_details', 'lat', 'lng',
        'type', 'ads_status', 'status'
    ];
}
