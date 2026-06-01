<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function listado(){
       // return "Este es el metodo para el select * from table";
        return view('/Compras_Tabla/compras_tabla');
    }
}
