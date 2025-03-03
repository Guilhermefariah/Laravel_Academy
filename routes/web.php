<?php

use App\Http\Controllers\UsuarioControlador;
use Illuminate\Support\Facades\Route;

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

Route::get('/usuarios', [UsuarioControlador::class, 'index'])
    ->middleware('primeiro', 'segundo');

Route::get('/terceiro', function() {
    return 'Passou pelo terceiro middleware';
})->middleware('terceiro:joao,20');