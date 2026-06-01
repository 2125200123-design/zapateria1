<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    //
     public $timestamps = false;
     protected $table = 'compra';
     public function proovedor()
    {
        return $this->belongsTo(Proovedor::class, 'id_proovedor');
    }

    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'id_compra');
    }

}
