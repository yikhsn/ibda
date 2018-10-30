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

/**
 * Controller for main page like home etc
 */
Route::get('/', 'MainController@index');

Route::get('/read', 'MainController@read');

Route::post('/read/search', 'MainController@search');


/**
 * Controller for Surat like single surat page and etc
 */
Route::get('/surat/{nomor_surat}', 'SuratController@show');



/**
 * Controller for Surat like single surat page and etc
 */
Route::get('/surat/{nomor_surat}/ayat/{nomor_ayat}', 'AyatController@show');


/**
 * Controller for Surat like single surat page and etc
 */
Route::get('/juz/{nomor_juz}', 'JuzController@show');