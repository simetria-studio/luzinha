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


Route::get('/sobre', function () {

    return view('home.sobre');
});
Route::get('/contatos', function () {

    return view('home.contatos');
});
Route::get('/livros', function () {

    return view('home.livros');
});
Route::get('/bebe', function () {

    return view('home.bebe');
});
