<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\CategoriaController;
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

Route::get('/', [PainelController::class, 'index'])->name('painel');

Route::get('/categoria/cadastro', [CategoriaController::class, 'index'])->name('categoria-cadastro');

Route::get('/categoria/listar', [CategoriaController::class, 'listar_categoria'])->name('categoria-listar');

Route::get('/produto/cadastro', [ProdutoController::class, 'index'])->name('produto-cadastro');
Route::get('/produto/listar', [ProdutoController::class, 'listar_produto'])->name('produto-listar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
