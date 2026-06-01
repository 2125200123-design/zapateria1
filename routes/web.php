<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProovedorController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\VentaController;

use App\Http\Controllers\FormClienteController;
use App\Http\Controllers\FormColorController;
use App\Http\Controllers\FormCompraController;
use App\Http\Controllers\FormContactoController;
use APP\Http\Controllers\FormEmpleadoController;
use App\Http\Controllers\FormMarcaController;
use App\Http\Controllers\FormProductoController;
use App\Http\Controllers\FormProovedorController;
use App\Http\Controllers\FormTallaController;
use App\Http\Controllers\FormVentaController;

Route::view('/','inicio');
Route::view('/Inicio_de_sesion','/Inicio_de_sesion/inicio_de_sesion');

//Route::view('/Contactos','/Contactos/contactos');
//Route::view('/Proovedores','/Proovedores/proovedores');
//Route::view('/Compras','/Compras/compras');
//Route::view('/Productos','/Productos/productos');
//Route::view('/Tallas','/Tallas/tallas');
//Route::view('/Marcas','/Marcas/marcas');;
//Route::view('/Colores','/Colores/colores');
//Route::view('/Ventas','/Ventas/ventas');
//Route::view('/Clientes','/Clientes/clientes');
//Route::view('/Empleados','/Empleados/empleados');

//Route::view('/Contactos_Tabla','/Contactos_Tabla/contactos_tabla');
//Route::view('/Proovedores_Tabla','/Proovedores_Tabla/proovedores_tabla');
//Route::view('/Compras_Tabla','/Compras_Tabla/compras_tabla');
//Route::view('/Productos_Tabla','/Productos_Tabla/productos_tabla');
//Route::view('/Tallas_Tabla','/Tallas_Tabla/tallas_tabla');
//Route::view('/Marcas_Tabla','/Marcas_Tabla/marcas_tabla');
//Route::view('/Colores_Tabla','/Colores_Tabla/colores_tabla');
//Route::view('/Ventas_Tabla','/Ventas_Tabla/ventas_tabla');
//Route::view('/Clientes_Tabla','/Clientes_Tabla/clientes_tabla');
//Route::view('/Empleados_Tabla','/Empleados_Tabla/empleados_tabla');

Route::get('/Empleados_Tabla',[EmpleadoController::class,'listado']);
Route::get('/Contactos_Tabla',[ContactoController::class,'listado']);
Route::get('/Proovedores_Tabla',[ProovedorController::class,'listado']);
Route::get('/Compras_Tabla',[CompraController::class,'listado']);
Route::get('/Productos_Tabla',[ProductoController::class,'listado']);
Route::get('/Tallas_Tabla',[TallaController::class,'listado']);
Route::get('/Marcas_Tabla',[MarcaController::class,'listado']);
Route::get('/Colores_Tabla',[ColorController::class,'listado']);
Route::get('/Ventas_Tabla',[VentaController::class,'listado']);
Route::get('/Clientes_Tabla',[ClienteController::class,'listado']);

Route::get('/Clientes',[FormClienteController::class,'listado']);
Route::get('/Colores',[FormColorController::class,'listado']);
Route::get('/Compras',[FormCompraController::class,'listado']);
Route::get('/Contactos',[FormContactoController::class,'listado']);
Route::get('/Empleados',[FormEmpleadoController::class,'listado']);
Route::get('/Marcas',[FormMarcaController::class,'listado']);
Route::get('/Productos',[FormProductoController::class,'listado']);
Route::get('/Proovedores',[FormProovedorController::class,'listado']);
Route::get('/Tallas',[FormTallaController::class,'listado']);
Route::get('/Ventas',[FormVentaController::class,'listado']);