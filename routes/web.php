<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ControladorAluno;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/produtos', [ProdutoController::class, 'indexView']);

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::post('/cursos', [CursoController::class, 'store']);
Route::get('/cursos/apagar/{id}', [CursoController::class, 'destroy']);
Route::get('/cursos/editar/{id}', [CursoController::class, 'edit']);
Route::post('/cursos/{id}', [CursoController::class, 'update']);
