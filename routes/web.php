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

Route::get('/','FrontController@getIndex');
Route::get('silatbetawi', 'FrontController@getSB');
Route::get('seminar','FrontController@getSM');
Route::get('workshop', 'FrontController@getWS');
Route::get('foto','FrontController@getFT');
Route::get('video', 'FrontController@getVD');
Route::get('unjuk','FrontController@getUK');
Route::get('festival', 'FrontController@getFS');
Route::get('detail/{id}', 'FrontController@getDetail');
Route::get('situs/{id}', 'FrontController@getST');
Route::get('situsseminar/{id}', 'FrontController@getSS');

Route::get('form','FrontController@getFM');

/*Route::post('/mhs', 'FrontController@store')->name('store');
Route::get('/mhs', 'FrontController@index')->name('index');
Route::get('/mhs/create', 'FrontController@create')->name('create');
Route::delete('/mhs/{id}', 'FrontController@destroy')->name('destroy');
Route::put('/mhs/{id}', 'FrontController@update')->name('update');
Route::get('/mhs/{id}', 'FrontController@show')->name('show');
Route::get('/mhs/{id}/edit', 'FrontController@edit')->name('edit');*/

Route::post('/dft', 'HomeController@store')->name('store');
Route::get('/dftr', 'HomeController@index')->name('index');
Route::get('/dftr/create', 'HomeController@create')->name('create');
Route::delete('/dftr/{id}', 'HomeController@destroy')->name('destroy');
Route::put('/dftr/{id}', 'HomeController@update')->name('update');
Route::get('/dftr/{id}', 'HomeController@show')->name('show');
Route::get('/dftr/{id}/edit', 'HomeController@edit')->name('edit');

//Auth::routes();

Route::get('/home', 'HomeController@index');
