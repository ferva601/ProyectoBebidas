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

Route::resource('productor','ProductorController');

Route::resource('producto','ProductoController');

Route::resource('marca','MarcaController');

Route::resource('usuario','UsuarioController');

Route::resource('credito','CreditoController');

Route::resource('bebida','BebidaController');

Route::resource('horeca','HorecaController');

Route::resource('importador','ImportadorController');

Route::resource('distribuidor','DistribuidorController');

Route::resource('Oferta','OfertaImportadorController');

Route::resource('Oferta','OfertaDistribuidorController');

Route::resource('Oferta','OfertaProductorController');

Route::resource('Demanda-Producto-distribuidor','DemandaProductoDistribuidorController');

Route::resource('Demanda-Producto-impostardor','DemandaProductoImportadorController');

Route::resource('Demanda-importador','DemandaImportacionController');

Route::resource('demanda-distribuidor','DemandaDistribucionController');

Route::resource('opinion','OpinionController');

Route::resource('banner','BannerController');