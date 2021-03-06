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
//Route::get('uerh/produccion', [Mejecutado_prod::class, 'ejecutado_prod'])->name('students/records');

//Route::get('/upab','Cupab@indexgraphupab');
Route::get('/','Cprincipal@indexgraph');
Route::get('/','Cuerh@indexgraph');
//Route::get('/','Cupab@indexgraphupab');
//Route::get('/','Cug23@indexgraph');
Route::get('/','Cuepi@indexgraph');
Route::get('/','Cfbmh@indexgraph');
Route::get('/','Cenauto@indexgraph');
Route::get('/inicio','Cprincipal@indexgraph');
//Route::get('/inicio','Cuerh@indexgraphpres');
Route::get('/fichas','Cprincipal@fichas');
Route::get('/fichas','Cprincipal@create');
Route::get('/productos','Cprincipal@create');
Route::get('/prog_anual_prod','Cprincipal@create');
Route::get('/prog_mensual_prod','Cprincipal@create');
Route::get('/produccion','Cprincipal@create');
Route::get('/store','Cprincipal@store');
Route::post('/store','Cprincipal@store');
Route::get('/store','Cprincipal@store');
Route::post('/storeProductos','Cprincipal@storeProductos');
Route::post('/storeEmpresa','Cprincipal@storeEmpresa');
Route::get('/storeProductos','Cprincipal@storeProductos');
Route::get('/storeEmpresa','Cprincipal@storeEmpresa');
Route::get('/storeprog_anual_prod','Cprincipal@storeprog_anual_prod');
Route::post('/storeprog_anual_prod','Cprincipal@storeprog_anual_prod');
Route::get('/storeprog_mensual_prod','Cprincipal@storeprog_mensual_prod');
Route::post('/storeproduccion','Cprincipal@storeproduccion');
Route::get('/storeproduccion','Cprincipal@storeproduccion');
Route::post('/storeprog_mensual_prod','Cprincipal@storeprog_mensual_prod');
Route::get('/storeprog_anual_ing','Cprincipal@storeprog_anual_ing');
Route::post('/storeprog_anual_ing','Cprincipal@storeprog_anual_ing');
Route::get('/storeprog_mensual_ing','Cprincipal@storeprog_mensual_ing');
Route::post('/storeprog_mensual_ing','Cprincipal@storeprog_mensual_ing');
Route::get('/storeingresos','Cprincipal@storeingresos');
Route::post('/storeingresos','Cprincipal@storeingresos');
Route::get('/storeprog_ingresos','Cprincipal@storeprog_ingresos');
Route::post('/storeprog_ingresos','Cprincipal@storeprog_ingresos');
Route::get('/storepresupuestogastado','Cprincipal@storepresupuestogastado');
Route::post('/storepresupuestogastado','Cprincipal@storepresupuestogastado');
Route::get('/storeejecucion_gastos','Cprincipal@storeejecucion_gastos');
Route::post('/storeejecucion_gastos','Cprincipal@storeejecucion_gastos');
Route::get('/storeinventarios','Cprincipal@storeinventarios');
Route::post('/storeinventarios','Cprincipal@storeinventarios');
Route::get('/storecuentas','Cprincipal@storecuentas');
Route::post('/storecuentas','Cprincipal@storecuentas');

Route::get('/edit/{id}','Cempresas@edit');
//Route::get('/update/{id}','Cempresas@update');
//Route::get('/eliminar/{id}','Cempresas@destroy');
Route::resource('/empresas','Cprincipal');
Route::resource('/empresas','Cempresas');
//Route::resource('/presupuestogastado','Cempresas');
Route::get('/uerh','Cuerh@index');
Route::resource('/uerh','Cuerh');
Route::resource('/ug23','Cug23');
Route::resource('/enauto','Cenauto');
Route::resource('/uepi','Cuepi');
Route::resource('/upab','Cupab');
Route::resource('/ugc23m','Cug23');
Route::resource('/fbm','Cfbm');
Route::resource('/uepi','Cuepi');


//EDIT
Route::get('/edit/{id}','Cuerh@edit');
Route::get('/update/{id}','Cuerh@update');
Route::get('/eliminar/{id}','Cuerh@destroy');
Route::get('/edit/editprod/{id}','Cuerh@editpro');
Route::put('/edit/editprod/{id}','Cuerh@updatepro');
Route::get('/edit/proganual/{id}','Cuerh@editproganual');
Route::put('/edit/proganual/{id}','Cuerh@updateproganual');
Route::get('/edit/proganualing/{id}','Cuerh@editproganualing');
Route::put('/edit/proganualing/{id}','Cuerh@updateproganualing');
Route::get('/edit/editprogmensualing/{id}','Cuerh@editprogmensual');
Route::put('/edit/editprogmensualing/{id}','Cuerh@updateprogmensualing');
Route::get('/edit/editprogmensual/{id}','Cuerh@editprogmensual');
Route::put('/edit/editprogmensual/{id}','Cuerh@updateprogmensual');
//Route::get('/uerh/{id}','Cuerh@editpro');

//DELETE
Route::get('eliminar/{id}','Cuerh@destroy');
Route::get('/empresas/eliminarprod/{id}','Cuerh@destroyprod');
Route::get('/empresas/eliminaring/{id}','Cuerh@destroying');
Route::get('/empresas/eliminarprog/{id}','Cuerh@destroyprog');
Route::get('/empresas/eliminar/{id}','Cuerh@destroypres');
Route::get('/empresas/eliminarinv/{id}','Cuerh@destroyinv');
Route::get('/empresas/eliminarseg/{id}','Cuerh@destroycue');
Route::get('/empresas/eliminareg/{id}','Cuerh@destroyeg');
//Graficos


Route::get('productosselect/{id}','Cprincipal@getproduct');

//Busquedas
Route::get('/ejecutado_prodb','Cuerh@buscar');