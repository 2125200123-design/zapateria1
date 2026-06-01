<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
     public $timestamps = false;
         public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_empleado');
    }
}
