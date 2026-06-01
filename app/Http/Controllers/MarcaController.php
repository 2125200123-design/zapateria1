<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function listado(){
        $marcas = Marca::all();
       // return "Este es el metodo para el select * from table";
        return view(
            'Marcas_Tabla.marcas_tabla',
            compact('marcas')        
        );
    }

    public function guardar(Request $request)
    {
        $marca = new Marca();

        $marca->nombre = $request->marca;

        $marca->save();

        return redirect('/Marcas_Tabla');
    }
}