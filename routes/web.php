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

Route::get('/admin/documents', 'documentController@index'); //listado de documentos
Route::get('/admin/documents/create','documentController@create')->name('create'); //formulario de insersion de documento
Route::get('/admin/documents/search','documentController@search')->name('search'); //formulario de busqueda de documento
Route::get('/admin/documents/all','documentController@index')->name('all'); //busqueda de documentos pendiente

Route::post('/admin/documents', 'documentController@store'); //listado de documentos



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
