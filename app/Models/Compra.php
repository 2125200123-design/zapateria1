<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    //
     public $timestamps = false;
     public function proovedor()
    {
        return $this->belongsTo(Proovedor::class, 'id_proovedor');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'id_compra');
    }

}
