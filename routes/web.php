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

Route::get('/', 'IndexController@Index');

//Route::get('/books','BooksController@index');

//Route::post('/books', 'BooksController@store');

Route::get('/autores', 'AutoresController@index');

Route::get('/books','BooksController@index');