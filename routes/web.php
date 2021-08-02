<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('layout', [SiteController::class, 'layout']);

Route::get('/', [SiteController::class, 'index']);
Route::get('/musicas', [SiteController::class, 'musicas']);
Route::get('/pais', [SiteController::class, 'pais']);
Route::get('/alimentacao', [SiteController::class, 'alimentacao']);
Route::get('/bebes', [SiteController::class, 'bebes']);
Route::get('/educar', [SiteController::class, 'educar']);
Route::get('/livros', [SiteController::class, 'livros']);
Route::get('/contatos', [SiteController::class, 'contatos']);
Route::get('contato', [SiteController::class, 'contato']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/incricao-musica', [SiteController::class, 'insMusica']);
Route::get('/inscricao-ballet', [SiteController::class, 'insBallet']);
Route::get('/livro-1', [SiteController::class, 'livro1']);

