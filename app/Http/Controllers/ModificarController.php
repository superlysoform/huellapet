<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ModificarController extends Controller
{
  

     public function edit($id)
    {	

    	$usuario = User::find($id);
       return view('modificarDatos')->with(compact('usuario'));
    }

      public function update(Request $request, $id)
    {	
      $usuario = User::find($id);

      if($request->hasFile(['imagen'])){
    	 $file= $request['imagen'];
       $path = public_path() . '/images/usuario';
       $fileName=uniqid().$file->getClientOriginalName();
       $moved = $file->move($path, $fileName);
       $usuario->imagen = $fileName;
     }
    	if( $request->input('nombre') ){
       $usuario->nombre = $request->input('nombre');
      }
    	
      if( $request->input('apellido') ){
       $usuario->apellido = $request->input('apellido');
      }
    	
      if( $request->input(['password']) ){
        $usuario->password = Hash::make($request);
      }
      
      $usuario->save();
      
     
      $notification = 'Los datos se modificaron correctamente';
      return view('modificarDatos')->with(compact('notification'));

    }
}
