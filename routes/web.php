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
Route::get('/inicio','Cprincipal@index');
Route::get('/fichas','Cprincipal@fichas');
Route::get('/edit/{id}','Cempresas@edit');
//Route::get('/update/{id}','Cempresas@update');
//Route::get('/eliminar/{id}','Cempresas@destroy');
Route::resource('/empresas','Cempresas');
//Route::resource('/presupuestogastado','Cempresas');
Route::get('/uerh','Cuerh@index');
Route::resource('/uerh','Cuerh');
Route::resource('/ugc23m','Cugc23m');
Route::resource('/enauto','Cugc23m');
Route::resource('/upab','Cupab');
Route::resource('/ugc23m','Cug23');
Route::resource('/fbm','Cfbm');

//CREATE
//Route::get('/productos','Cuerh@productos');
//Route::post('/productos','Cuerh@store');
Route::get('/produccion','Cuerh@produccion');
Route::post('/produccion','Cuerh@store');
Route::get('/prog_anual_prod','Cuerh@store');
Route::post('/prog_anual_prod','Cuerh@store');


//Route::get('/edit/{id}','Cuerh@edit');

//Route::get('/', [Cuerh::class, 'index']);
//Route::get('/uerh','Cuerh@index');
