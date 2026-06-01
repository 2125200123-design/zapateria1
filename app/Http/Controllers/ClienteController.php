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
        dd($request->all());
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->rfc = $request->rfc;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->edad = $request->edad;
        $cliente->contrasena = $request->contrasena;
        $cliente->estado = $request->estado;
        //tambien le puso lo de la imagen pero no se si eso lo vaya a tronar aqui xd

        $cliente->save();

        return redirect('/Clientes_Tabla');
    }

    public function editar($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.clientes', compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

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