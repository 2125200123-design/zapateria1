<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function listado()
    {
        $clientes = Cliente::all();

        return view(
            'Clientes_Tabla.clientes_tabla',
            compact('clientes')
        );
    }
}