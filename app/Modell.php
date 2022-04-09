<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modell extends Model
{
    protected $fillable = [
        'brand_id', 'model_name', 'model_status'
    ];

    public function modell()
    {
    	return $this->belongsTo(Brand::class);
    }
}
