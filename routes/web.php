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



Route::get('/empleado', 'EmpleadoController@index');
Route::post('/empleado', 'EmpleadoController@store');

Route::get('/provedor', 'ProvedorController@index');
Route::post('/provedor', 'ProvedorController@store');

Route::get('/cliente', 'ClienteController@index');
Route::post('/cliente', 'ClienteController@store');

Route::post('/provedorattach', 'ProvedorController@storeAttach');
Route::post('/provedorsync', 'ProvedorController@storeSync');

Route::get('/clienteconsulta', 'ClienteConsultaController@index');

Route::get('/empleado/calificacion', 'CalificacionController@index');
Route::post('/empleado/calificacion', 'CalificacionController@store');

Route::get('/provedor/calificacion', 'CalificacionController@index');
Route::post('/provedor/calificacion', 'CalificacionController@store');

Route::get('/cliente/calificacion', 'CalificacionController@index');
Route::post('/cliente/calificacion', 'CalificacionController@store');

