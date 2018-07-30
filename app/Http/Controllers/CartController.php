<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Cart;
use App\Mail\NewOrder;
use Mail;


class CartController extends Controller
{
    public function update()
    {	
    	$client = auth()->user();
    	$cart = $client->cart;
    	$cart->status = "Pendiente";
    	$cart->order_date = Carbon::now();
    	$cart->save(); // UPDATE
        
        $admins = User::where('admin',true)->get();
    	Mail::to($admins)->send(new NewOrder($client, $cart));

    	$cartStatus='Tu Pedido se ha registrado correctamente. Te contactaremos pronto por email';
    	return back()->with(compact('cartStatus'));
    }

 
}
