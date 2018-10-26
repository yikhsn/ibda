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

Route::get('/', 'MainController@index');

Route::get('/surat/{id}', 'MainController@surat');

Route::get('/ayat/{id}', 'MainController@ayat');

Route::get('/juz/{id}', 'MainController@juz');