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

Route::get('/livro', 'LivroController@index')->name('livro_index');
Route::get('/livro/create', 'LivroController@create')->name('livro_create');
Route::post('/livro/store', 'LivroController@store')->name('livro_store');
Route::get('/livro/edit/{id}', 'LivroController@edit')->name('livro_edit');
Route::post('/livro/update', 'LivroController@update')->name('livro_update');
Route::post('/livro/delete/', 'LivroController@destroy')->name('livro_delete');
//CRUD livro
Route::get('/autor', 'AutorController@index')->name('autor_index');
Route::get('/autor/create', 'AutorController@create')->name('autor_create');
Route::post('/autor/store', 'AutorController@store')->name('autor_store');
Route::get('/autor/edit/{id}', 'AutorController@edit')->name('autor_edit');
Route::post('/autor/update', 'AutorController@update')->name('autor_update');
Route::post('/autor/delete/', 'AutorController@destroy')->name('autor_delete');
