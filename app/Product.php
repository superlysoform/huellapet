<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    
	// un producto pertenece a una categoria 
    public function category()
    {
    	return $this->belongsto(Category::class);

    }

    // un producto tiene muchas imagenes
    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }

    public function getFeatureImageUrlAttribute()
    {
       $featuredImage = $this->images()->where('feature',true)->first();
       if(!$featuredImage){
             $featuredImage = $this->images()->first();
       }
       if($featuredImage ){
        return $featuredImage->url;

       }

       return '/images/products/default.jpg';

    }

     public function getCategoryNameAttribute($value='')
    {
        if($this->category)
          return $this->category->name;

        return 'General';
    }

}
