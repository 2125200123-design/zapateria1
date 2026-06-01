<?php

namespace App\Http\Controllers;

use App\Models\Venta;

class VentaController extends Controller
{
    public function listado(){
       // return "Este es el metodo para el select * from table";
            $ventas = Venta::all();
        return view(
            'Ventas_Tabla.ventas_tabla',
            compact('ventas')        
        );
    }
}
