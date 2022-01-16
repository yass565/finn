<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
  
class Category extends Model
{
    
  
    protected $fillable = [
        'parent_category_id', 'category_name', 'img', 'status', 'insert_date_time'
    ];

    public function categoriesFils()
    {
    	return $this->hasMany(Category::class, 'parent_category_id');
    }

    public function categoryParent()
    {
    	return $this->belongsTo(Category::class, 'parent_category_id');
    }

    public function ads()
    {
    	return $this->belongsToMany(Ads::class);
    }

}
