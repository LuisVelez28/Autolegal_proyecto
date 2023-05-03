<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\RutaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// traer la vista de la pagina principal que esta en la carpeta views/main/index.blade.php

Route::get('/', function () {
    return view('main.index');
});
Route::get('/ingreso', function () {
    return view('ingreso.ingreso');
});
Route::get('/contactanos', function () {
    return view('contactanos.contactanos');
});
Route::get('/conocernos', function () {
    return view('conocernos.conocernos');
});
Route::get('/rutasyhorarios', function () {
    return view('rutas.rutas');
});
Route::get('/registro', function () {
    return view('iniciarsesion.registro');
});
// Route::get('/CuentaAdmin', function () {
//     return view('cuenta_Admin.IngresoBus');
// });

Route::resource('/CuentaAdmin',VehiculoController::class);

Route::resource('/clientes',ClienteController::class);

Route::resource('/empleados',EmpleadoController::class);

Route::resource('/rutas',RutaController::class);

Route::resource('/rolUsuario',RolUsuarioController::class);

Route::resource('/paradas',ParadaController::class);
