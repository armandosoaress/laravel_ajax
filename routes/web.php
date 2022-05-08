<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\funcoescrud;


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

// Route::get('/teste', function () {
//     return 'Olá, user!';
// });

Route::get('/', [funcoescrud::class,"listar"]);
Route::get('/cadastrarlivros', [funcoescrud::class,"cadastrarlivros"]);
Route::post('/enviarlivrosparaobanco', [funcoescrud::class,"enviarlivrosparaobanco"]);
Route::delete('/deletar/{id}', [funcoescrud::class,"deletarlivros"]);
Route::get('/editar/{id}', [funcoescrud::class,"editarlivro"]);
Route::put('/update/{id}', [funcoescrud::class,"update"]);



