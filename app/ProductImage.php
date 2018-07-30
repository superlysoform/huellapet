<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class ProductImage extends Model
{
    
	// una imagen le pertenece  aun producto
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function getUrlAttribute()
    {
    	if(substr($this->image,0,4) === "http"){
    		return $this->image;

    	}
    	return '/images/products/'. $this->image;
    }

   
}
