<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', 'testController@welcome');



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/search', 'SearchController@show'); //buscador
Route::get('/products/json', 'SearchController@data'); //buscador


Route::get('/modificarDatos/{id}/edit', 'ModificarController@edit')->name('modificarDatos'); // formulario de Edicion
Route::post('/modificarDatos/{id}/edit', 'ModificarController@update'); // actualizar


Route::get('/products/{id}', 'ProductController@show'); //vista de producto
Route::get('/categories', 'CategoryController@tienda'); //vista de producto
Route::get('/categories/{category}', 'CategoryController@show'); //vista de producto

Route::get('/nosotros', 'NosotrosController@nosotros')->name('nosotros'); //nosotros 
Route::get('/faqs', 'FaqsController@faqs')->name('faqs'); // faqs 

Route::get('/contacto', 'ContactoController@contacto')->name('contacto'); // contacto
Route::post('/contacto', 'ContactoController@contactoEmail')->name('contacto'); // contacto
Route::post('/contacto/news', 'ContactoController@contactoNews')->name('contacto'); // contacto

//Route::get('/search', 'SearchController@show'); //buscador

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');


Route::get('/usuarioCompra', 'UsuarioCompraController@show')->name('usuarioCompra');


Route::middleware(['auth','admin'])->group(function () {


		Route::get('/admin/products', 'Admin\ProductController@index'); // listado
		Route::get('/admin/products/create', 'Admin\ProductController@create'); // crear
		Route::post('/admin/products', 'Admin\ProductController@store'); // registrar

		Route::get('/admin/products/{id}/edit', 'Admin\ProductController@edit'); // formulario de Edicion
		Route::post('/admin/products/{id}/edit', 'Admin\ProductController@update'); // actualizar
		Route::post('/admin/products/{id}/delete', 'Admin\ProductController@destroy'); // form eliminar

		Route::get('/admin/products/{id}/images', 'Admin\ImageController@index'); // form eliminar
		Route::post('/admin/products/{id}/images', 'Admin\ImageController@store'); // registrar
		Route::delete('/admin/products/{id}/images', 'Admin\ImageController@destroy'); // imagen eliminar

		Route::get('/admin/products/{id}/images/select/{image}', 'Admin\ImageController@select');


		Route::get('/admin/categories', 'Admin\CategoryController@index'); // listado de categorias
		Route::get('/admin/categories/create', 'Admin\CategoryController@create'); // crear nuevas categorias
		Route::post('/admin/categories', 'Admin\CategoryController@store'); // registrar

		Route::get('/admin/categories/{id}/edit', 'Admin\CategoryController@edit'); // formulario de Edicion
		Route::post('/admin/categories/{id}/edit', 'Admin\CategoryController@update'); // actualizar
		Route::delete('/admin/categories/{id}', 'Admin\CategoryController@destroy'); // form eliminar Eliminar
});


