<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigCity extends Model
{
    protected $fillable = [
        'bcity_name', 'statuss'
    ];

    public function cities()
    {
    	return $this->hasMany(City::class);
    }

    public function ads()
    {
    	return $this->hasMany(Ads::class);
    }
}
