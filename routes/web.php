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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return ('login');
});
Route::get('/logout', function () {
    return ('logout');
});
Route::get('/productos', function () {
    return ('listado productos');
});
Route::get('/productos/show/{id}', function ($id) {
    return ('Vista detalle producto ' . $id);
});
Route::get('/productos/create', function () {
    return ('Añadir producto');
});
Route::get('/productos/edit/{id}', function ($id) {
    return ('Modificar producto ' . $id);
});
