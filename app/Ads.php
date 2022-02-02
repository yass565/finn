<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable = [
        'category_id', 'big_city_id', 'city_id', 'title',
        'price', 'short_desc', 'multi_image', 'description',
        'specification', 'other_details', 'lat', 'lng',
        'type', 'ads_status', 'status', 'etat', 'max_price','typeVente', 'typeSearch'
    ];

    public function categories()
    {
    	return $this->belongsToMany(Category::class, 'ads_category');
    }

    public function bigCities()
    {
    	return $this->belongsTo(BigCity::class);
    }

    public function cities()
    {
    	return $this->belongsTo(City::class);
    }

}
