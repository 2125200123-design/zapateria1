<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colores extends Model
{
    //
     public $timestamps = false;
             public function productos()
      {
          return $this->hasMany(Producto::class, 'id_color');
      }
}
