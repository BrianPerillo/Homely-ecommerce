<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CarritoController extends Controller
{
  public function show()
  {
  $cart = Cart::create();
  return view("carrito");
  }

  public function listado(){
    $carrito = Cart::where('user_id',Auth::User()->id)->get()->first()->products()->get();
    
    $vac = compact("carrito");
    
    return view("carrito", $vac);
  }


  public function edit($id, Request $request)
  {
    $cart = Cart::find($id);
    $product = Product::find($id);
    $cart->products()->sync([
      $id => [
        "quantity" => $request->get("quantity"), /*get para obtener dato de un objeto, no es array*/
        "total_price" => $product->price*$request->get("quantity")
      ]
    ]);

    return redirect()->back();
  }

  public function create($id)
  {
  $cart = Cart::where('user_id',Auth::user()->id);

    if(!$cart->exists()){
      $nuevoCart = Cart::create(['user_id'=>Auth::user()->id]);

      $product = Product::find($id);
      $nuevoCart->products()->attach($product, [
      "quantity" => 1,
      "cart_id" => $nuevoCart->id,
      "total_price" => $product->price,
      ]);
      $nuevoCart->save();
    }else{
      $product = Product::find($id);
      $cart->first()->products()->attach($product, [
        "quantity" => 1,
        "cart_id" => $cart->first()->id,
        "total_price" => $product->price,
      ]);
      $cart->first()->save();
    }

  return redirect()->back();
  }

  public function delete($id)  // Esta borrando pero borra todo
  {
    $cart = Cart::where('user_id',Auth::user()->id);

      if(!$cart->exists()){
        $nuevoCart = Cart::create(['user_id'=>Auth::user()->id]);

        $product = Product::find($id);
        $nuevoCart->products()->detach($product, [
        "quantity" => 1,
        "cart_id" => $nuevoCart->id,
        "total_price" => $product->price,
        ]);
        $nuevoCart->save();
      }else{
        $product = Product::find($id);
        $cart->first()->products()->detach($product, [
          "quantity" => 1,
          "cart_id" => $cart->first()->id,
          "total_price" => $product->price,
        ]);
      }

    return redirect()->back();
  }


}
