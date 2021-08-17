<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RegisterController;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [SiteController::class, 'landingpage']);
Route::get('/livro-1', [SiteController::class, 'lpbomdia']);
Route::get('/livro-2', [SiteController::class, 'lphorapapa']);
Route::get('/home', [SiteController::class, 'index']);
Route::get('/musicas', [SiteController::class, 'musicas']);
Route::get('/pais', [SiteController::class, 'pais']);
Route::get('/alimentacao', [SiteController::class, 'alimentacao']);
Route::get('/bebes', [SiteController::class, 'bebes']);
Route::get('/educar', [SiteController::class, 'educar']);
Route::get('/livros', [SiteController::class, 'livros'])->middleware('auth');
Route::get('/contatos', [SiteController::class, 'contatos']);
Route::get('contato', [SiteController::class, 'contato']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/incricao-musica', [SiteController::class, 'insMusica']);
Route::get('/inscricao-ballet', [SiteController::class, 'insBallet']);
Route::get('/livro-hora-da-papa', [SiteController::class, 'horapapa'])->middleware('auth');
Route::get('/livro-1', [SiteController::class, 'livro1'])->middleware('auth');
Route::get('/livro-2', [SiteController::class, 'livro2'])->middleware('auth');
Route::get('/livro-bom-dia', [SiteController::class, 'bomdia'])->middleware('auth');
Route::get('loja-home', [SiteController::class, 'loja']);
Route::get('produto-1', [SiteController::class, 'produtoOne']);
Route::get('produto-2', [SiteController::class, 'produtoTwo']);
Route::get('videos', [SiteController::class, 'videos']);
Route::get('jogos', [SiteController::class, 'jogos']);

Route::post('registo', [RegisterController::class, 'store']);




