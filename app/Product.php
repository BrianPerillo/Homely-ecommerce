<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public $table = "productos";
    // public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    // Relación con Colores - Un producto pertece a un color
  	public function color()
  	{
  		return $this->belongsTo(Color::class);
  	}

    // Relacion con categorias - un prod puede pertenecer a muchas categorias
    public function categories(){
      return $this->belongsToMany("App\Category");
    }

    // Relacion con carritos - un producto puede pertenecer a muchos carritos
    public function carts(){
      return $this->belongsToMany("App\Cart","cart_product","product_id","cart_id");
    }
}
