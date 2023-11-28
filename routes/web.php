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

Route::get('/uf', 'UfController@index');
Route::post('/uf', 'UfController@store');
Route::put('/uf', 'UfController@update');
Route::delete('/uf/{codigo_uf}', 'UfController@destroy');

Route::get('municipio', 'MunicipioController@municipio');
Route::post('municipio', 'MunicipioController@municipio');
Route::put('municipio', 'MunicipioController@municipio');
Route::delete('municipio/{codigoMunicipio}', 'MunicipioController@municipio');

Route::get('bairro', 'BairroController@bairro');
Route::post('bairro', 'BairroController@bairro');
Route::put('bairro', 'BairroController@bairro');
Route::delete('bairro/{codigoBairro}', 'BairroController@bairro');



