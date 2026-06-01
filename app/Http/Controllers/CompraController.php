<?php

namespace App\Http\Controllers;

use App\Models\Compra;

class CompraController extends Controller
{
    public function listado()
    {
        $compras = Compra::all();

        return view(
            'Compras_Tabla.compras_tabla',
            compact('compras')
        );
    }
}