<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function listado()
    {
        $productos = Producto::all();
        // return "Este es el metodo para el select * from table";
        return view(
            'Productos_Tabla.productos_tabla',
            compact('productos')
        );
    }

    public function guardar(Request $request)
    {
        //dd($request->all());

        $producto = new Producto();

        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->existencia = $request->existencia;

        $producto->proveedor_id = $request->proveedor_id;
        $producto->talla_id = $request->talla_id;
        $producto->marca_id = $request->marca_id;
        $producto->color_id = $request->color_id;

        $producto->estado = $request->estado;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombre = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $nombre);
            $producto->imagen = $nombre;
        }

        $producto->save();

        return redirect('/Productos_Tabla');
    }

    public function editar($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.productos', compact('producto'));
    }

    public function actualizar(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->existencia = $request->existencia;

        $producto->proveedor_id = $request->proveedor_id;
        $producto->talla_id = $request->talla_id;
        $producto->marca_id = $request->marca_id;
        $producto->color_id = $request->color_id;

        $producto->estado = $request->estado;

        if ($request->hasFile('imagen')) {
            if ($producto->imagen) {
                unlink(public_path('img/' . $producto->imagen));
            }

            $file = $request->file('imagen');
            $nombre = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $nombre);
            $producto->imagen = $nombre;
        }

        $producto->save();

        return redirect('/Productos_Tabla');
    }
}