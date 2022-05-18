<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    echo "Conteúdo dinamico Home";
});

Route::get('/sobre', function () {
    echo "Conteúdo dinamico Sobre";
});

Route::get('/contato', function () {
    echo "Conteúdo dinamico Contato";
});

Route::get('/servicos', function () {
    echo "Conteúdo dinamico Serviços";
});
