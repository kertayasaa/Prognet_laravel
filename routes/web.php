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
Route::get('/','homeController');


Route::get('/home','homeController');

Route::resource('prodi','ProdiController');
Route::resource('mahasiswa','MahasiswaController'); //mengatur lalu lintas di url
