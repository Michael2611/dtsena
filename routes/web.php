<?php

use Illuminate\Support\Facades\Route;
use App\Models\Canal;
use App\Models\Dispositivo;

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
    $datos = Canal::all();
    $dispositivos_n = Dispositivo::all();
    return view('welcome', compact('datos','dispositivos_n'));
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/canal/{id}/dispositivos', [App\Http\Controllers\DispositivoController::class, 'dispositivos']);
Route::get('/canales', [App\Http\Controllers\CanalController::class, 'canales']);
Route::post('/canal-registro', [App\Http\Controllers\CanalController::class, 'registroCanal']);
Route::delete('/canal/{id}', [App\Http\Controllers\CanalController::class, 'eliminarCanal'])->name('canal.eliminar');
Route::get('/canal/{id}', [App\Http\Controllers\CanalController::class, 'canalInfo'])->name('canal.info');
Route::get('/canal/{id}/editar', [App\Http\Controllers\CanalController::class, 'editarCanal'])->name('canal.editar');
Route::put('/canal/{id}', [App\Http\Controllers\CanalController::class, 'actualizarCanal'])->name('canal.actualizar');

Route::post('/dispositivo-registro', [App\Http\Controllers\DispositivoController::class, 'registroDispositivo'])->name('dispositivo.registro');
Route::delete('/dispositivo/{id}', [App\Http\Controllers\DispositivoController::class, 'eliminarDispositivo'])->name('dispositivo.eliminar');

Route::get('/export/{id}', [App\Http\Controllers\DispositivoController::class, 'export'])->name('export');
