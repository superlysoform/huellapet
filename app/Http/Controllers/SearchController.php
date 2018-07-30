<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function show(Request $request)
    {
    	$pregunta=$request->input('pregunta');
    	$nombreProducto = Product::where('name', 'like' ,"%$pregunta%" )->paginate(9);
    	return view('search.show')->with(compact('nombreProducto','pregunta'));
    }

	public function data()
	   {
	   	$products = Product::pluck('name'); // obtiene todos los nombre de productos
	   	return $products;
	   }   

}
