<?php

namespace App\Http\Controllers;

use App\Models\VistaProducto;
use Illuminate\Http\Request;

class VistaProductoController extends Controller
{
    public function index()
    {
        $productos = VistaProducto::all();

        return view('vista_productos.index', compact('productos'));
    }

    public function editar($id)
    {
        $producto = VistaProducto::findOrFail($id);

        return view('vista_productos.editar', compact('producto'));
    }

    public function actualizar(Request $request, $id)
    {
        $producto = VistaProducto::findOrFail($id);

        $producto->update($request->all());

        return redirect()->route('vista_productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function eliminar($id)
    {
        $producto = VistaProducto::findOrFail($id);
        $producto->delete();

        return redirect()->route('vista_productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}