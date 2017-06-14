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
Route::get('seminar/{id}', 'PageController@getSeminarId')->name('page.seminar.show2');
Route::get('detail', 'PageController@getDetail')->name('page.seminar-show');
Route::get('workshop', 'PageController@getWorkshop')->name('page.workshop');
Route::get('workshop/{id}', 'PageController@getWorkshopId')->name('page.workshop.show3');
Route::get('galeri/foto', 'PageController@getGaleriFoto')->name('page.foto');
Route::get('galeri/video', 'PageController@getGaleriVideo')->name('page.video');
Route::get('daftar-silat', 'PageController@getDaftarSilat')->name('page.daftar-silat');
Route::post('daftar-silat', 'PageController@postDaftarSilat')->name('page.daftar-silat.post');
Route::get('daftar-seminar', 'PageController@getDaftarSeminar')->name('page.daftar-seminar');
Route::post('daftar-seminar', 'PageController@postDaftarSeminar')->name('page.daftar-seminar.post');
Route::get('daftar-workshop', 'PageController@getDaftarWorkshop')->name('page.daftar-workshop');
Route::post('daftar-workshop', 'PageController@postDaftarWorkshop')->name('page.daftar-workshop.post');



//Auth::routes();

Route::get('/home', 'HomeController@index');
