<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@home');
Route::post('/login-submit','PagesController@postlogin');

// konten
Route::get('/konten','KontenController@index');

// Route::get('/profil/index/{id}','ProfilController@index');

// vendor-proyek
Route::get('/vendor-proyek', 'VendorController@index');
Route::get('/vendor-proyek/create', 'VendorController@create');
Route::post('/vendor-proyek/add', 'VendorController@submit');
Route::get('/vendor-proyek/show/{id}', 'VendorController@show');
Route::get('/vendor-proyek/edit/{id}', 'VendorController@edit');
Route::patch('/vendor-proyek/{vendor}', 'VendorController@update');
Route::get('/vendor-proyek/delete/{vendor}', 'VendorController@destroy');

// manager
// Route::resource('manager','ManagerController');
Route::get('/manager', 'ManagerController@index');
Route::get('/manager/create', 'ManagerController@create');
Route::post('/manager/add', 'ManagerController@submit');
Route::get('/manager/show/{id}', 'ManagerController@show');
Route::get('/manager/edit/{id}', 'ManagerController@edit');
Route::patch('/manager/{manager}', 'ManagerController@update');
Route::get('/manager/delete/{manager}', 'ManagerController@destroy');

// proyek
Route::get('/proyek', 'ProyekController@index');
Route::get('/proyek/create', 'ProyekController@create');
Route::post('/proyek/add', 'ProyekController@submit');
Route::get('/proyek/deskripsi/{id}', 'ProyekController@deskripsi');
Route::post('/proyek/store', 'ProyekController@store');
Route::get('/proyek/laporan/{id}', 'ProyekController@laporan');
Route::get('/proyek/show/{id}', 'ProyekController@show');
Route::post('/proyek/update','ProyekController@update');
Route::get('/proyek/print/{id}','ProyekController@print');
Route::get('/proyek/delete/{proyek}', 'ProyekController@destroy');
Route::get('/proyek/edit/{id}', 'ProyekController@edit');
Route::post('/proyek/{deskripsi}', 'ProyekController@change');

// login
Route::get('/login', 'LoginController@index');

// Route::get('/layout', function(){
//     return view('layout')
// })