<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public $table = "categories";
  // public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];


// Relacion con productos - una categoria puede tener muchos productos
  public function products(){
    return $this->belongsToMany("App\Product","category_product","category_id","product_id");
}

}
