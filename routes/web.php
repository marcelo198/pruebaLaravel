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
//Route::get('/name/{name}',function($name){
//  return 'hola soy'.$name;
//});


//Route::get('/mi_primer_ruta', function() {
//  return 'hola choro como tay';
//});
Route::get('list','DetallesController@index');
Auth::routes();



Route::get('list','UsuariosController@index');
Route::get('create','UsuariosController@create');
Route::get('update','UsuariosController@update');
Route::get('delete','UsuariosController@destroy');

Route::get('list','DetallesController@index');
Route::get('create','DetallesController@create');
Route::get('update','DetallesController@update');
Route::get('delete','DetallesController@destroy');
