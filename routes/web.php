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

Route::get('/', function(){
	return view('index');
});

Route::get("/products", "ProductsController@index");
Route::get("/products/create", "ProductsController@create");
Route::post("/products/store", "ProductsController@store");
Route::get('/products/edit/{id}', 'ProductsController@edit')->middleware('auth');
Route::put('/products/{id}', 'ProductsController@update');
Route::get('/products/{id}', 'ProductsController@show');
Route::delete('/products/{id}', 'ProductsController@destroy');
Route::post('/search', 'ProductsController@searchProducts');

Route::get('/categorias', 'CategoriesController@index');
Route::get('/categorias/{name}', 'CategoriesController@showCategories');



Route::get("/cart", "CarritoController@listado");


Route::post("/cart/add/{id}", "CarritoController@create");


Route::post("/cart/edit/{id}", "CarritoController@edit");


Route::delete("/cart/{id}", "CarritoController@delete");




Route::get("/index", function(){
  return view("index");
});

Route::get("/faq", function(){
  return view("faq");
});

Route::get("/politica", function(){
  return view("politica");
});

Route::get("/locations", function(){
  return view("locations");
});

Route::get("/nosotros", function(){
  return view("nosotros");
});

//El loguin va por Auth de laravel
//Route::get("/login", "UsuarioController@login");

Route::get("/logout", function(){
  return view("logout");
});

Route::get("/profile", function(){
  return view("profile");
});

Route::get("/register", function(){
  return view("profile");
});
Auth::routes();

Route::get("/categoria","CategoriaController@index");

Route::get("/carrito", function(){
  return view("carrito");
});


Route::get('/home', 'HomeController@index')->name('home');
Route::put('/home/{id}', 'HomeController@updateUser');
