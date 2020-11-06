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

Route::get('/gestor', 'gestor\GestorController@index');
Route::post('/gestor2', 'gestor\GestorController@destroy')->name("gestor.delete");
Route::post('/download/{name}', 'gestor\GestorController@download')->name("gestor.download");
Route::get('/', 'TaskController@index');
Route::get('/tasks', 'TaskController@getTasks')->name('datatable.tasks');

