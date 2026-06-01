<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listado()   {
        $clientes = Cliente::all();

        return view(
            'Clientes_Tabla.clientes_tabla',
            compact('clientes')
        );
    }

    public function guardar(Request $request)
    {
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->rfc = $request->rfc;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->edad = $request->edad;
        $cliente->contrasena = $request->contrasena;
        $cliente->estado = $request->estado;

        $cliente->save();

        return redirect('/Clientes_Tabla');
    }
}