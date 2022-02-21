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


Route::get('/', 'FuncionesController@index')->name('funciones.index');
Route::get('/create', 'FuncionesController@create')->name('funciones.create');
Route::post('/store', 'FuncionesController@store')->name('funciones.store');
Route::get('/{id}/edit', 'FuncionesController@edit')->name('funciones.edit');
Route::put('/{id}/update', 'FuncionesController@update')->name('funciones.update');
Route::delete('/{id}', 'FuncionesController@destroy')->name('funciones.destroy');