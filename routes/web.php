<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', [HomeController::class, 'getHome']);
//Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/logout', function () {
    return ('logout');
});
Route::post('/logout', function () {
    return ('logout');
});
Route::group(['prefix' => 'productos'], function () {

Route::get('/', [ProductoController::class, 'getIndex']);

Route::get('/show/{id}', [ProductoController::class, 'getShow']);

Route::get('/edit/{id}', [ProductoController::class, 'getEdit']);

Route::get('/create', [ProductoController::class, 'getCreate']);
Route::put('/create', [ProductoController::class, 'getCreate']);

});
