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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', function() {
    return redirect('/');
});
Route::get('/kontrak', function() {
    return redirect('/');
});

Route::get('/kontrak/tambah', 'HomeController@tambahData');
Route::post('/kontrak/tambah', 'HomeController@simpanData');
Route::get('/kontrak/{id}/{name}/edit', 'HomeController@lihatData');
Route::get('/kontrak/{id}/{name}/update', 'HomeController@perbaharuiKontrak');
Route::put('/kontrak/{id}/update', 'HomeController@updateData');
Route::delete('/kontrak/{id}', 'HomeController@hapusData');