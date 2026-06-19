<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProveedorController;
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
use App\Http\Controllers\FormEmpleadoController;
use App\Http\Controllers\FormMarcaController;
use App\Http\Controllers\FormProductoController;
use App\Http\Controllers\FormProveedorController;
use App\Http\Controllers\FormTallaController;
use App\Http\Controllers\FormVentaController;

use App\Http\Controllers\ClimaController;

Route::view('/', 'inicio');
Route::view('/Inicio_de_sesion', '/Inicio_de_sesion/inicio_de_sesion');

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

//Tablas
Route::get('/Empleados_Tabla', [EmpleadoController::class, 'listado']);
Route::get('/Contactos_Tabla', [ContactoController::class, 'listado']);
Route::get('/Proveedores_Tabla', [ProveedorController::class, 'listado']);
Route::get('/Compras_Tabla', [CompraController::class, 'listado']);
Route::get('/Productos_Tabla', [ProductoController::class, 'listado']);
Route::get('/Tallas_Tabla', [TallaController::class, 'listado']);
Route::get('/Marcas_Tabla', [MarcaController::class, 'listado']);
Route::get('/Colores_Tabla', [ColorController::class, 'listado']);
Route::get('/Ventas_Tabla', [VentaController::class, 'listado']);
Route::get('/Clientes_Tabla', [ClienteController::class, 'listado']);

//Formularios
Route::get('/Clientes', [FormClienteController::class, 'listado']);
Route::get('/Colores', [FormColorController::class, 'listado']);
Route::get('/Compras', [FormCompraController::class, 'listado']);
Route::get('/Contactos', [FormContactoController::class, 'listado']);
Route::get('/Empleados', [FormEmpleadoController::class, 'listado']);
Route::get('/Marcas', [FormMarcaController::class, 'listado']);
Route::get('/Productos', [FormProductoController::class, 'listado']);
Route::get('/Proveedores', [FormProveedorController::class, 'listado']);
Route::get('/Tallas', [FormTallaController::class, 'listado']);
Route::get('/Ventas', [FormVentaController::class, 'listado']);

//Guardar datos
Route::post('/clientes/guardar', [ClienteController::class, 'guardar'])->name('clientes.guardar');
Route::post('/colores/guardar', [ColorController::class, 'guardar'])->name('colores.guardar');
Route::post('/contactos/guardar', [ContactoController::class, 'guardar'])->name('contactos.guardar');
Route::post('/empleados/guardar', [EmpleadoController::class, 'guardar'])->name('empleados.guardar');
Route::post('/marcas/guardar', [MarcaController::class, 'guardar'])->name('marcas.guardar');
Route::post('/tallas/guardar', [TallaController::class, 'guardar'])->name('tallas.guardar');
Route::post('/ventas/guardar', [VentaController::class, 'guardar'])->name('ventas.guardar');
Route::post('/proveedores/guardar', [ProveedorController::class, 'guardar'])->name('proveedores.guardar');
Route::post('/productos/guardar', [ProductoController::class, 'guardar'])->name('productos.guardar');
Route::post('/compras/guardar', [CompraController::class, 'guardar'])->name('compras.guardar');

//Editar datos
Route::get('/clientes/editar/{id}', [ClienteController::class, 'editar']);
Route::get('/colores/editar/{id}', [ColorController::class, 'editar']);
Route::get('/marcas/editar/{id}', [MarcaController::class, 'editar']);
Route::get('/empleados/editar/{id}', [EmpleadoController::class, 'editar']);
Route::get('/ventas/editar/{id}', [VentaController::class, 'editar']);
Route::get('/tallas/editar/{id}', [TallaController::class, 'editar']);
Route::get('/contactos/editar/{id}', [ContactoController::class, 'editar']);
Route::get('/proveedores/editar/{id}', [ProveedorController::class, 'editar']);
Route::get('/productos/editar/{id}', [ProductoController::class, 'editar']);
Route::get('/compras/editar/{id}', [CompraController::class, 'editar']);

//Actualizar datos
Route::post('/clientes/actualizar/{id}', [ClienteController::class, 'actualizar']);
Route::post('/colores/actualizar/{id}', [ColorController::class, 'actualizar']);
Route::post('/marcas/actualizar/{id}', [MarcaController::class, 'actualizar']);
Route::post('/empleados/actualizar/{id}', [EmpleadoController::class, 'actualizar']);
Route::post('/ventas/actualizar/{id}', [VentaController::class, 'actualizar']); 
Route::post('/tallas/actualizar/{id}', [TallaController::class, 'actualizar']);
Route::post('/contactos/actualizar/{id}', [ContactoController::class, 'actualizar']);
Route::post('/proveedores/actualizar/{id}', [ProveedorController::class, 'actualizar']);
Route::post('/productos/actualizar/{id}', [ProductoController::class, 'actualizar']);
Route::post('/compras/actualizar/{id}', [CompraController::class, 'actualizar']);

//Eliminar datos
Route::get('/clientes/eliminar/{id}', [ClienteController::class, 'eliminar']);
Route::delete('/colores/eliminar/{id}', [ColorController::class, 'eliminar']);
Route::delete('/marcas/eliminar/{id}', [MarcaController::class, 'eliminar']);
Route::get('/empleados/eliminar/{id}', [EmpleadoController::class, 'eliminar']);
Route::get('/ventas/eliminar/{id}', [VentaController::class, 'eliminar']);
Route::delete('/tallas/eliminar/{id}', [TallaController::class, 'eliminar']);
Route::delete('/contactos/eliminar/{id}', [ContactoController::class, 'eliminar']);
Route::delete('/proveedores/eliminar/{id}', [ProveedorController::class, 'eliminar']);
Route::get('/productos/eliminar/{id}', [ProductoController::class, 'eliminar']);
Route::get('/compras/eliminar/{id}', [CompraController::class, 'eliminar']);


use App\Http\Controllers\VistaProductoController;

Route::get('/vista_productos', [VistaProductoController::class, 'index']);

Route::get('/clima', [ClimaController::class, 'index']);