<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name_brand', 'statuss'
    ];

    public function brands()
    {
    	return $this->hasMany(Modell::class);
    }

    public function ads()
    {
    	return $this->hasMany(Ads::class);
    }
}

