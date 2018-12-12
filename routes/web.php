<?php

/*
|--------------------------------------------------------------------------
| Web RoutesHo
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/livro', 'HomeController@index')->name('categoria_index');
Route::get('/livro/create', 'HomeController@create')->name('categoria_create');
Route::post('/livro/store', 'HomeController@store')->name('categoria_store');
Route::get('/livro/edit/{id}', 'HomeController@edit')->name('categoria_edit');
Route::post('/livro/update', 'HomeController@update')->name('categoria_update');
Route::post('/livro/delete/', 'HomeController@destroy')->name('categoria_delete');

//CRUD subcategoria
Route::get('/autor', 'LivroController@index')->name('subcategoria_index');
Route::get('/autor/create', 'LivroController@create')->name('subcategoria_create');
Route::post('/autor/store', 'LivroController@store')->name('subcategoria_store');
Route::get('/autor/edit/{id}', 'LivroController@edit')->name('subcategoria_edit');
Route::post('/autor/update', 'LivroController@update')->name('subcategoria_update');
Route::post('/autor/delete/', 'LivroController@destroy')->name('subcategoria_delete');
