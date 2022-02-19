<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsCategory extends Model
{
    protected $fillable = [
        'ads_id', 'category_id'
    ];
    //

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function ads()
    {
    	return $this->belongsTo(Ads::class);
    }
}
