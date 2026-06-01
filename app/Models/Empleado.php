<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $primaryKey = 'empleado_id';
     public $timestamps = false;
         public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_empleado');
    }
}
