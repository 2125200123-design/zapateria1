<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

      public $timestamps = false;
      public function productos()
      {
          return $this->hasMany(Productos::class, 'id_proveedor');
      }
      
      public function compras()
      {
          return $this->hasMany(Compras::class, 'id_proveedor');
      }

        public function contactos()
      {
          return $this->hasMany(Contactos::class, 'id_proveedor');
      }

}
