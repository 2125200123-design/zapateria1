<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function listado(){
        $empleados = Empleado::where('estado', 'Activo')->get();
        return view(
            'Empleados_Tabla.empleados_tabla',
            compact('empleados')        
        );
    }

    public function guardar(Request $request)
    {
        $empleado = new Empleado();

        $empleado->nombre = $request->nombre;
        $empleado->correo = $request->correo;
        $empleado->rfc = $request->rfc;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->edad = $request->edad;
        $empleado->contrasena = $request->contrasena;
        $empleado->rol = $request->rol;
        $empleado->estado = $request->estado;

        $empleado->save();

        return redirect('/Empleados_Tabla');
    }
        public function editar($id)
    {
        $empleado = Empleado::findOrFail($id);

        return view('empleados.empleados', compact('empleado'));
    }

    public function actualizar(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);

        $empleado->nombre = $request->nombre;
        $empleado->correo = $request->correo;
        $empleado->rfc = $request->rfc;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->edad = $request->edad;
        $empleado->contrasena = $request->contrasena;
        $empleado->rol = $request->rol;
        $empleado->estado = $request->estado;

        $empleado->save();

        return redirect('/Empleados_Tabla');
    }

public function eliminar($id)
{
    $empleado = Empleado::findOrFail($id);

    $empleado->estado = 'Inactivo'; // o 0
    $empleado->save();

    return redirect('/Empleados_Tabla');
}

}
