<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Mail\ContactoEmail;
use App\Mail\ContactoNews;
use Mail;


class ContactoController extends Controller
{
    public function contacto()
   {
   	return view('contacto');
   }


    public function contactoEmail(Request $request)
   {
    $this->validate($request, [
        'nombre' => 'required|min:5|max:20',
        'email' => 'required|email',
        'mensaje' =>'required|min:10'
           ]);
           
    $data = array(
        'nombre' => $request->nombre,
        'email' => $request->email,
        'mensaje' => $request->mensaje
        );

   
    Mail::to('ayelen005@gmail.com')->send(new ContactoEmail($data));
	Session::flash('success', 'Su correo ha sido enviado de forma satisfactoria!');
   	//return redirect()->back()->with(['Correcto' => "Su consulta ha sido enviada con exito!"]);
    return back();

   }  

     public function contactoNews(Request $request)
   {
    $this->validate($request, [
        'email' => 'required|email',
        
           ]);
           
    $data = array(
        'email' => $request->email,
        
        );

   
    Mail::to('ayelen005@gmail.com')->send(new ContactoNews($data));
	Session::flash('success', 'Su correo ha sido enviado de forma satisfactoria!');
   	//return redirect()->back()->with(['Correcto' => "Su consulta ha sido enviada con exito!"]);
    return back();

   }  

}
