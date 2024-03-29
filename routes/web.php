<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ativo3eController;

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

/* 2. Desenvolver uma interface web utilizando o framework Laravel que permita aos
  usuários realizar operações CRUD (criar, ler, atualizar, excluir) sobre os ativos. */

// Rotas de listagem e criação de ativos
Route::get('/ativos', [Ativo3eController::class, 'index'])->name("ativos.index");

Route::get('/ativos/create', [Ativo3eController::class, 'create'])->name("ativos.create"); // exibe um formulário de criação de ativos

Route::post('/ativos', [Ativo3eController::class, 'store'])->name("ativos.store"); // criação de um novo ativo

// Rotas para exibir, atualizar e excluir ativos
Route::get('/ativos/{id}', [Ativo3eController::class, 'show'])->name("ativos.show"); // exibe detalhes de um ativo

Route::get('/ativos/{id}/edit', [Ativo3eController::class, 'edit'])->name("ativos.edit"); // exibe o formulário para edição de um ativo

Route::put('/ativos/{id}', [Ativo3eController::class, 'update'])->name("ativos.update"); // atualiza o um ativo indicado

Route::delete('/ativos/{id}/delete', [Ativo3eController::class, 'destroy'])->name("ativos.destroy"); // exclue o ativo
