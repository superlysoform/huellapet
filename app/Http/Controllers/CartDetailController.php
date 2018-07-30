<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CartDetail;
use App\User;

class CartDetailController extends Controller
{
    public function store(Request $request)
    {	
        if(!auth()->user()) {
            return view('auth.login');
        }

    	$cartDetail= new CartDetail();
    	$cartDetail->cart_id = auth()->user()->cart->id;
    	$cartDetail->product_id = $request->product_id;
    	$cartDetail->quantity = $request->quantity;
    	$cartDetail->save();

    	$agregoExito = 'El producto se agrego correctamente';
    	return back()->with(compact('agregoExito'));
    }

    public function destroy(Request $request)
    {
    	$cartDetail= CartDetail::find($request->cart_detail_id);
    	if( $cartDetail->cart_id == auth()->user()->cart->id )
    		$cartDetail->delete();

    	$notification = 'El producto se elimino correctamente';
    	return back()->with(compact('notification'));
    }

   
}
