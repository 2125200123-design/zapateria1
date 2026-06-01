<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
     public $timestamps = false;
        public function productos()
      {
          return $this->hasMany(Producto::class, 'id_marca');
      }
}
