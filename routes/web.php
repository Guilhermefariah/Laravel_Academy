<?php

use App\Http\Controllers\ControladorAluno;
use App\Http\Controllers\ControladorCurso;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/cursos', [ControladorCurso::class, 'index']);
Route::get('/cursos/novo', [ControladorCurso::class, 'create']);
Route::post('/cursos', [ControladorCurso::class, 'store']);
Route::get('/cursos/apagar/{id}', [ControladorCurso::class, 'destroy']);
Route::get('/cursos/editar/{id}', [ControladorCurso::class, 'edit']);
Route::post('/cursos/{id}', [ControladorCurso::class, 'update']);
