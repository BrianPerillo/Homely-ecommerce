<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  public $table = "colors";
  // public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];

// Relacion con los productos - hay muchos productos de cada color
  public function products()
  {
    return $this->hasMany(Color::class);
  }

}
