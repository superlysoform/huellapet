<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Category extends Model
{	
	protected $fillable = ['name','description'];
    
    // $category tiene muchos $products

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
    	$featuredProduct = $this->products()->first();
    	return $featuredProduct->feature_image_url;
    }
}
