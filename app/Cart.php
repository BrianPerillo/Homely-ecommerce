<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public $table = "carts";
  // public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];


  // Relacion con productos - un carrito puede tener muchos productos
    public function products(){
      return $this->belongsToMany("App\Product", "cart_product", "cart_id", "product_id");
  }
}
