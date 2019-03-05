<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', 'ClientController@listar');
Route::get('/clientes/novo', 'ClientController@novo');
Route::get('/clientes/listar', 'ClientController@listar2');
Route::get('/clientes/editar/{id}', 'ClientController@editar')->where('id', '[0-9]');


