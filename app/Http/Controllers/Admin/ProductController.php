<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function index()
    {

    	$products=Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));//listado


    }

    public function create()
    {   
        $categories = Category::orderBy('name')->get();
    	return view('admin.products.create')->with(compact('categories'));// formulario de registro
    }

   
    public function store(Request $request)
    {

        /*Validaciones y las reglas de los campos en el formulario para los campos obligatorios
        documentacion de laravel Available Validation Rules*/
        $messages=[
            'name.required'=>'EL nombre obligatorio',
            'name.min'=>'EL nombre del producto debe tener 3 letras como minimo',
            'description.required'=>'La descripcion es obligatoria',
            'price.required'=>'El precio es obligatorio',
            'price.min'=>'El precio es obligatorio',
            'price.numeric'=>'El precio tiene que ser un numero +',
        ];

        $rules=[
            'name'=>'required|min:3',
            'description'=>'required | max:200',
            'price'=>'required | numeric | min:0',


        ];
        /*nos manda a la pagina dnd estabamos y muestra los mensajes de error*/

        $this->validate($request, $rules, $messages);
    	

        //dd($request->all());
          

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->category_id = $request->category_id;
       
        $product->save(); // esto crea el producto por primera vez

        return redirect('/admin/products');
    }


    public function edit($id)
    {   
        $categories = Category::orderBy('name')->get();
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product','categories'));// formulario de registro
    }


    public function update(Request $request, $id)
    {

          /*Validaciones y las reglas de los campos en el formulario para los campos obligatorios
        documentacion de laravel Available Validation Rules*/
        $messages=[
            'name.required'=>'EL nombre obligatorio',
            'name.min'=>'EL nombre del producto debe tener 3 letras como minimo',
            'description.required'=>'La descripcion es obligatoria',
            'price.required'=>'El precio es obligatorio',
            'price.min'=>'El precio es obligatorio',
            'price.numeric'=>'El precio tiene que ser un numero +',
        ];

        $rules=[
            'name'=>'required|min:3',
            'description'=>'required | max:200',
            'price'=>'required | numeric | min:0',


        ];
        /*nos manda a la pagina dnd estabamos y muestra los mensajes de error*/

        $this->validate($request, $rules, $messages);
        //dd($request->all());

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->category_id = $request->category_id;

        $product->save(); // esto modifica el producto

        return redirect('/admin/products');
    }

    public function destroy($id)
    {
         $product = Product::find($id);
         $product->images()->delete(); //Elimina el producto

         $product->delete();

         return back(); //vuelve a la pagina donde estaba el usuario

    }
}
