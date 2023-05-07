<?php

use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TipoRutaController;
use App\Http\Controllers\TipoVehiculoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ViajeController;

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
    return view('index');
});
Route::get('/registro', function () {
    return view('registro.registro');
});
Route::get('/ingreso', function () {
    return view('ingreso.ingreso');
});
Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/conocernos', function () {
    return view('conocernos');
});
Route::get('/rutas', function () {
    return view('rutas');
});

// Route::get('/CuentaAdmin', function () {
//     return view('cuenta_Admin.IngresoBus');
// });

Route::resource('/CuentaAdmin', VehiculoController::class);

Route::resource('/clientes', ClienteController::class);

Route::resource('/empleados', EmpleadoController::class);

Route::resource('/rutasyhorarios', RutaController::class);

Route::resource('/rolUsuario', RolUsuarioController::class);

Route::resource('/paradas',ParadaController::class);

Route::resource('/tipoEmpleado', TipoEmpleadoController::class);

Route::resource('/tipoRuta',TipoRutaController::class);

Route::resource('/tipoVehiculo', TipoVehiculoController::class);

Route::resource('/viajes', ViajeController::class);