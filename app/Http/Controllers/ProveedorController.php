<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function listado()
    {
        $proveedores = Proveedor::all();

        return view('Proveedores_Tabla.proveedores_tabla', compact('proveedores'));
    }
}
