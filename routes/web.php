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

Route::get('/mod', 'menu@showMod')->name('verMod');
Route::get('/ver', 'menuControl@onlin');
Route::get('/verMenu', 'menuControl@verMenu')->name('verMen');
Route::post('/generar', 'menuControl@generarMenul')->name('generarMenu');
Route::post('/subir/comida', 'menuControl@storeFood')->name('storeFood');
route::get('/addFood', 'menuControl@añadirAlimento')->name('addFood');
route::get('/modificar', 'menuControl@verMod')->name('upd');
Route::post('/update/food', 'menuControl@upFood')->name('upFood');
