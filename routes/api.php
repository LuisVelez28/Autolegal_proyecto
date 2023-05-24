<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\TipoRutaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ViajeController;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware(['auth', 'Admin'])->group(function () {

    Route::resource('/vehiculos', VehiculoController::class);
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/empleados', EmpleadoController::class);
    Route::resource('/rutasyhorarios', RutaController::class);
    Route::resource('/rolUsuario', RolUsuarioController::class);
    Route::resource('/paradas', ParadaController::class);
    Route::resource('/tipoEmpleado', TipoEmpleadoController::class);
    Route::resource('/tipoRuta', TipoRutaController::class);
    Route::resource('/tipoVehiculo', TipoVehiculoController::class);
    Route::resource('/viajes', ViajeController::class);
    Route::resource('/pqrs', PqrsController::class)->except(['create','store']);
    Route::resource('/usuarios', UserController::class);

    Route::get('downloadCliente-pdf', '\App\Http\controllers\ClienteController@generar_pdf')->name('descargarClientes-pdf');
    Route::get('downloadVehiculo-pdf', '\App\Http\controllers\VehiculoController@generar_pdf')->name('descargarVehiculos-pdf');

    // Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'Cliente'])->group(function () {

    Route::get('/CuentaCliente', function () {
        return view('indexUsuario');
    })->name('CuentaCliente');

});

Route::middleware(['guest'])->group(function () {

    // Route::view('/conocernos', 'conocernos');
    // Route::view('/rutas', 'rutas');

    Route::resource('/pqrs', PqrsController::class)->only(['store','create']);

    Route::view('/registro', 'registro.registro')->name('registro');
    Route::view('/ingreso', 'ingreso.ingreso')->name('ingreso');
    Route::post('/validar-registro', [RegisterController::class, 'store'])->name('validar-registro');
    Route::post('/iniciar-sesion', [LoginController::class, 'authenticate'])->name('iniciar-sesion');
});

// No restriccion
Route::resource('/contactanos', PqrsController::class);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::view('/conocernos','conocernos')->name('conocernos');
Route::view('/rutas','rutas')->name('rutas');
Route::get('/', function () {
    return view('index');
})->name('index');
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
