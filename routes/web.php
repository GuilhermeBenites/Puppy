<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'categorias'], function () {
    Route::get('/', 'CategoriaController@index');
    Route::get('/novo', 'CategoriaController@create');
    Route::post('/novo', 'CategoriaController@store');
    Route::get('/editar/{categoria}', 'CategoriaController@edit');
    Route::put('/editar/{categoria}', 'CategoriaController@update');
    Route::delete('/{categoria}', 'CategoriaController@destroy');
});