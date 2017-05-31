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
    return redirect()->action('UsuarioController@index');
});

//  RUTAS PARA LOS USUARIOS
Route::get('usuario/{id}/mis-productores', 'UsuarioController@ver_productores')->name('usuario.productores');
Route::get('usuario/{id}/mis-importadores', 'UsuarioController@ver_importadores')->name('usuario.importadores');
Route::get('usuario/{id}/mis-distribuidores', 'UsuarioController@ver_distribuidores')->name('usuario.distribuidores');
Route::get('usuario/{id}/mis-horecas', 'UsuarioController@ver_horecas')->name('usuario.horecas');

Route::get('usuario/registrar-productor', 'UsuarioController@registrar_productor')->name('usuario.registrar-productor');
Route::get('usuario/registrar-importador', 'UsuarioController@registrar_importador')->name('usuario.registrar-importador');
Route::get('usuario/registrar-distribuidor', 'UsuarioController@registrar_distribuidor')->name('usuario.registrar-distribuidor');
Route::get('usuario/registrar-horeca', 'UsuarioController@registrar_horeca')->name('usuario.registrar-horeca');

Route::resource('usuario','UsuarioController');

// ./RUTAS PARA LOS USUARIOS

Route::resource('productor','ProductorController');
Route::get('productor/ingresar/{id}', 'ProductorController@ingresar')->name('productor.ingresar');

Route::resource('producto','ProductoController');

Route::resource('marca','MarcaController');



Route::resource('credito','CreditoController');

Route::resource('bebida','BebidaController');

Route::resource('horeca','HorecaController');

Route::resource('importador','ImportadorController');

Route::resource('distribuidor','DistribuidorController');

Route::resource('oferta','OfertaController');

Route::resource('demanda-producto','DemandaProductoController');

Route::resource('demanda-importador','DemandaImportacionController');

Route::resource('demanda-distribuidor','DemandaDistribucionController');

Route::resource('suscripcion', 'SuscripcionController');

Route::resource('opinion','OpinionController');


Auth::routes();

Route::get('/home', 'UsuarioController@index')->name('dashboard');
