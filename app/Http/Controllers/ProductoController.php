<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function listado(){
        $productos = Producto::all();
       // return "Este es el metodo para el select * from table";
        return view(
            'Productos_Tabla.productos_tabla',
            compact('productos')        
        );
    }
}
