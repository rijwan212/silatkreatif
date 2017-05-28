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

// Front Page
Route::get('/','PageController@getBeranda')->name('page.beranda');
Route::get('silat-betawi', 'PageController@getSilatBetawi')->name('page.silat-betawi');
Route::get('silat-betawi/{id}', 'PageController@getSilatBetawiId')->name('page.silat-betawi.show');
Route::get('seminar', 'PageController@getSeminar')->name('page.seminar');
Route::get('workshop', 'PageController@getWorkshop')->name('page.workshop');
Route::get('galeri/foto', 'PageController@getGaleriFoto')->name('page.foto');
Route::get('galeri/video', 'PageController@getGaleriVideo')->name('page.video');
Route::get('daftar-silat', 'PageController@getDaftarSilat')->name('page.daftar-silat');

//Auth::routes();

Route::get('/home', 'HomeController@index');
