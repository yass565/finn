<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $fillable = [
        'brand_id', 'model_name', 'model_status'
    ];

    public function modele()
    {
    	return $this->belongsTo(Brand::class);
    }
}
