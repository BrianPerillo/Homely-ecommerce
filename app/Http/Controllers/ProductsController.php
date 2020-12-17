<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Color;
use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();

      $vac = compact("products");

      return view("products", $vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $colors = Color::orderBy('name')->get();
      $categories = Category::orderBy('name')->get();
      return view('products-create-form', compact('colors','categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validación de Campos
      $request->validate([
        'name' => "required|string|unique:products,name",
        'price' => "required|numeric",
        'color_id' => "required",
        'category_id' => "required",
        'dimension' => 'required | string',
        'description' => 'required | string',
        'photo' => 'required | image'
      ], [
        'name.required' => 'Es obligatorio ingresar el nombre',
        'name.unique' => 'El nombre ya se encuentra en la base de datos',
        'price.required' => 'Es obligatorio ingresar el precio',
        'color_id.required' => 'Es obligatorio elegir un color',
        'category_id.required' => 'Es obligatorio elegir una categoria',
        'price.numeric' => 'El precio debe contener solo números',
        'dimension.required' => 'Es obligatorio ingresar las medidas',
        'description.required' => 'Es obligatorio ingresar la descripción',
        'photo.required' => 'La imagen es obligatoria'
      ]);

      // Guardamos el nuevo producto - create() guarda en DB y retorna el objeto que acabamos de guardar
 			$newProduct = new Product();
      //
      // // Guardamos la foto
      $ruta = $request->file("photo")->store("public");
      $nombreArchivo = basename($ruta);
      $newProduct->photo = $nombreArchivo;
      //
      $newProduct->color_id = $request['color_id'];
      $newProduct->price = $request['price'];
      $newProduct->name = $request['name'];
      $newProduct->dimension = $request['dimension'];
      $newProduct->description = $request['description'];

			$newProduct->save();
      $newProduct->categories()->sync([$request['category_id']]);

      // Vamos a retornar una redirección a un RUTA
      return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $productDetail = Product::find($id);

      $vac = compact("productDetail");

      return view("products-show", $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $productToEdit = Product::find($id);
      $colors = Color::orderBy('name')->get();
      $categories = Category::orderBy('name')->get();
      return view('products-edit-form', compact('productToEdit', 'colors','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      // Validación de Campos
      $request->validate([
        'name' => "required|string",
        'price' => "required|numeric",
        'color_id' => "required",
        'category_id' => "required",
        'dimension' => 'required | string',
        'description' => 'required | string',
        'photo' => 'required | image'
      ], [
        'name.required' => 'Es obligatorio ingresar el nombre',
        'price.required' => 'Es obligatorio ingresar el precio',
        'color_id.required' => 'Es obligatorio elegir un color',
        'category_id.required' => 'Es obligatorio elegir una categoria',
        'price.numeric' => 'El precio debe contener solo números',
        'dimension.required' => 'Es obligatorio ingresar las medidas',
        'description.required' => 'Es obligatorio ingresar la descripción',
        'photo.required' => 'La imagen es obligatoria'
      ]);

      $productToUpdate = Product::find($id);

      $productToUpdate->name = $request->input('name');
      $productToUpdate->price = $request->input('price');
      $productToUpdate->color_id = $request->input('color_id');
      // $productToUpdate->category_id = $request->input('category_id');
      $productToUpdate->dimension = $request->input('dimension');
      $productToUpdate->description = $request->input('description');

      $ruta = $request->file("photo")->store("public");
      $nombreArchivo = basename($ruta);

      $productToUpdate->photo = $nombreArchivo;
      $productToUpdate->save();
      $productToUpdate->categories()->sync($request['category_id']);

      return redirect('/products');
    }


  //-------------------------------------------------------------------------------------------------------------

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $productToDelete = Product::with('categories')->find($id);
      $productToDelete->categories()->detach();
      $productToDelete->delete();
      return redirect('/products');
    }

//-------------------------------------------------------------------------------------------------------------

    public function searchProducts(Request $request){
      //$search = $request->all();
      $search2 = $request->input('busqueda');
      //dd($search);
      //dd($search2);
      $resultado = Product::where('name', 'like', '%'.$search2.'%')->get();
      $resultado = compact('resultado');
      return view('search', $resultado);
    }

}
