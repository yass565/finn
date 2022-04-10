<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name_brand', 'statuss'
    ];

    public function modeles()
    {
    	return $this->hasMany(Modele::class);
    }

    public function ads()
    {
    	return $this->hasMany(Ads::class);
    }
}
