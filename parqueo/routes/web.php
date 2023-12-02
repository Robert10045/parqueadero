<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EmpleadoController;

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

Route::get('/', function () {
    return view('auth.login');
});


// Rutas para Empleados
Route::resource('empleados', EmpleadoController::class);
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadoController::class, 'create']);
Route::post('/empleados', [EmpleadoController::class, 'store']);
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit']);
Route::patch('/empleados/{empleado}', [EmpleadoController::class, 'update']);
Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy']);


/*Route::get('/vehiculo', function () {
    return view('vehiculo.index');
});

Route::get('/vehiculo/create',[VehiculoController::class,'create']);*/

Route::resource('vehiculo',VehiculoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [VehiculoController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [VehiculoController::class, 'index'])->name('home');
});