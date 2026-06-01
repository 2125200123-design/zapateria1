<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    //
     protected $table = 'proovedores';
      public $timestamps = false;
      public function productos()
      {
          return $this->hasMany(Producto::class, 'id_proovedor');
      }
      
      public function compras()
      {
          return $this->hasMany(Compra::class, 'id_proovedor');
      }

        public function contactos()
      {
          return $this->hasMany(Contacto::class, 'id_proovedor');
      }

}
