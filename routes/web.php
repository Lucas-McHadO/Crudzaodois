<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[ProdutoController::class , 'index']);
Route::get('/produtos',[ProdutoController::class , 'index']);
Route::post('produtos/add',[ProdutoController::class , 'cadastrar']);
Route::get('produtos/{id}/editar', [ProdutoController::class, 'editar']);
Route::post('/produtos/atualizar/{id}', [ProdutoController::class, 'atualizar']);
