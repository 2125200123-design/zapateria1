<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
     public $timestamps = false;
     protected $table = 'compras';
     public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'id_compra');
    }

}
