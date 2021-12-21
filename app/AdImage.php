<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
    protected $fillable = [
        'left', 'right','top','bottom','status'
    ];
}
