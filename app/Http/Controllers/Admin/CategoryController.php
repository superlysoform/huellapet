<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductImage;

class CategoryController extends Controller
{
 public function index()
  {

      $categories=Category::orderBy('name')->paginate(10);
      return view('admin.categories.index')->with(compact('categories'));//listado


  }

  public function create()
  {
      return view('admin.categories.create');// formulario de registro
  }


  public function store(Request $request)
  {

      /*Validaciones y las reglas de los campos en el formulario para los campos obligatorios
      documentacion de laravel Available Validation Rules*/
      $messages=[
          'name.required'=>'la categoria es obligatoria',
          'name.min'=>'EL nombre de la categoria debe tener 3 letras como minimo',
          'description.required'=>'La descripcion es obligatoria',
      ];

      $rules=[
          'name'=>'required|min:3',
          'description'=>'max:200',
      ];
 

      $this->validate($request, $rules, $messages);
     

      //dd($request->all());

      Category::create($request->all());
   

      return redirect('/admin/categories');
  }


  public function edit($id)
  {  
      $categoSelect = Category::All();
      $categories = Category::find($id);

      return view('admin.categories.edit')->with(compact('categories', 'categoSelect'));// formulario de registro
  }


  public function update(Request $request, $id)
  {

        /*Validaciones y las reglas de los campos en el formulario para los campos obligatorios
      documentacion de laravel Available Validation Rules*/
      $messages=[
          'name.required'=>'la categoria es obligatoria',
          'name.min'=>'EL nombre de la categoria debe tener 3 letras como minimo',
          'description.required'=>'La descripcion es obligatoria',
         
      ];

      $rules=[
          'name'=>'required|min:3',
          'description'=>'max:200',
      ];
      /*nos manda a la pagina dnd estabamos y muestra los mensajes de error*/

      $this->validate($request, $rules, $messages);
      //dd($request->all());

      $categories = Category::find($id);
      $categories->name = $request->input('name');
      $categories->description = $request->input('description');
      $categories->save(); // esto modifica el producto

      return redirect('/admin/categories');
  }

  /*public function destroy($id)
  {    
      NO ELIMINAR LAS CATEGORIAS POR LA RELACION DE TABLAS.

      Category::find($id); //esto devuelve categoria 4
      Product::where('category_id',$id); // esto trae todos los productos con categiria 4
      return back();//vuelve a la pagina donde estaba el usuario

  }*/
}