<?php

use Illuminate\Support\Facades\Route;
use App\Models\Canal;

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
    return view('welcome', compact('datos'));
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/canal/{id}/dispositivos', [App\Http\Controllers\DispositivoController::class, 'dispositivos']);
Route::get('/canales', [App\Http\Controllers\CanalController::class, 'canales']);
Route::post('/canal-registro', [App\Http\Controllers\CanalController::class, 'registroCanal']);
