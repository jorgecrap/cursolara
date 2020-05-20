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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('notas', function () {
    return 'Notas | Listado';
});

Route::get('notas/crear', function () {
    return 'Notas | Crear nota';
});

Route::get('notas/{id}/editar', function ($id) {
    return 'Notas | Editar nota '.$id;
});

Route::get('notas/{id}', function ($id) {
    return 'Notas | Detalle nota '.$id;
});


