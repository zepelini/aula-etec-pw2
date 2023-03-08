<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('/', [ProdutoController::class, 'listar'])
->name('produto.listar');

Route::get('/inserir', [ProdutoController::class, 'inserir'])
->name('produto.inserir');
Route::post('/salvar', [ProdutoController::class, 'salvar'])
->name('produto.salvar');

Route::get('/alterar/{id}', [ProdutoController::class, 'alterar'])->name('produto.alterar');