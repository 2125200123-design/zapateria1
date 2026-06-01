<?php

namespace App\Http\Controllers;

use App\Models\Color;

class ColorController extends Controller
{
    public function listado()
    {
        $colores = Color::all();

        return view(
            'Colores_Tabla.colores_tabla',
            compact('colores')
        );
    }
}