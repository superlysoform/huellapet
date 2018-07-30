<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CartDetail;

class Cart extends Model
{
    public function details()
    {
    	return $this->hasMany(CartDetail::class);
    }

    public function getTotalAttribute()
    {
    	$total = 0;
    	foreach ($this->details as $detalle) {
    		$total += $detalle->quantity * $detalle->product->price;
    	}
    	return $total;
    }
}
