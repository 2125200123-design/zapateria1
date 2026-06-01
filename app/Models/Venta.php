<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public $timestamps = false;
    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'id_venta');
    }
}
