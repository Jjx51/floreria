<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});

*/

Route::view('/', 'welcome');
//Route::view('/inicio', 'home.index')->name('inicio');

Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('inicio');
Route::post('/inicio', 'HomeController@show')->name('inicio.show');

/*Rutas de home*/
Route::get('/inicio/venta/{id}', 'HomeController@venta')->name('inicio.venta');
Route::get('/inicio/mostrador/{id}', 'HomeController@mostrador')->name('inicio.mostrador');
Route::get('/inicio/pedido/{id}', 'HomeController@pedido')->name('inicio.pedido');

/*Rutas de usuarios*/
Route::get('/usuarios', 'AuthController@index')->name('usuarios.index');
Route::get('/usuarios/crear', 'AuthController@create')->name('usuarios.create');
Route::get('/usuarios/{id}/editar', 'AuthController@edit')->name('usuarios.edit')->where(['id'=>'[\d]+']);
Route::put('/usuarios', 'AuthController@update')->name('usuarios.update');
Route::delete('/usuarios', 'AuthController@delete')->name('usuarios.delete');


Route::resource('Categoryp', 'CategoryProductController');
Route::put('Product/agregar/{id}', 'ProductController@agregar')->name('AgregarProducto');
Route::put('Product/descontar/{id}', 'ProductController@descontar')->name('DescontarProducto');
Route::resource('Product', 'ProductController');
Route::resource('Array', 'ArrayController');
Route::resource('ArrayProduct', 'ArrayProductController');

Route::get('/reportes','ReportsController@index')->name('reports.index');

Route::post('florista/Venta', 'OrderController@Venta')->name('florista.venta');
Route::get('/florista','OrderController@index')->name('order.florista');
Route::get('/repartidor','OrderController@indexrepartidor')->name('order.repartidor');
//Route::get('/merma','WasteController@index')->name('waste.index');
//Route::get('/venta-manual','arrayOrder@index')->name('arrayorder.index');
