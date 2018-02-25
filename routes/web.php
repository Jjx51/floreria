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

Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('inicio');

/*Rutas de home*/
Route::get('/inicio/venta/{id}', 'HomeController@venta')->name('inicio.venta')->where(['id'=>'[\d]+']);
Route::get('/inicio/mostrador/{id}', 'HomeController@mostrador')->name('inicio.mostrador')->where(['id'=>'[\d]+']);
Route::get('/inicio/pedido/{id}', 'HomeController@pedido')->name('inicio.pedido')->where(['id'=>'[\d]+']);

/*ruta de prueba*/
Route::get('/prueba', function () {
    return view('crudarray.create');
});

/*ruta de prueba de pdf*/
Route::get('/pdf', 'PdfController@index');