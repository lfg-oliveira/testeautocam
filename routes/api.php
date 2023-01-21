<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('App\Http\Middleware\CompressResponse')->group(function () {
    Route::post('user/', 'App\Http\Controllers\UserController@criarUsuario');
    Route::post('maquina/', 'App\Http\Controllers\MaquinaController@cadastrarMaquina');
    Route::post('manutencao/', 'App\Http\Controllers\ManutencaoController@cadastrarManutencao');
});
