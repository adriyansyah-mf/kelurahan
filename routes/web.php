<?php

use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\rwController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



    Route::view('/', "dashboard")->name('dashboard');


// rute kelurahan
Route::get('/kelurahan','KelurahanController@index')->name('kelurahan');
Route::get('/kelurahan/hapus/{id}','KelurahanController@delete');
Route::get('/kelurahan/tambah','KelurahanController@tambah')->name('kelurahantambah');
Route::post('kelurahan/store','KelurahanController@store');
Route::get('kelurahan/edit/{id}','KelurahanController@edit');
Route::post('kelurahan/update','KelurahanController@update');

// rute rt
Route::get('/rt','RtController@index')->name('rt');
Route::get('/rt/hapus/{id}','RtController@delete');
Route::get('rt/edit/{id}','RtController@edit');
Route::post('rt/update','RtController@update');
Route::get('/rt/tambah','RtController@tambah')->name('rttambah');
Route::post('rt/store','RtController@store');

//rute rw
Route::get('/rw','rwController@index')->name('rw');
Route::get('rw/edit/{id}','rwController@edit');
Route::post('rw/update','rwController@update');
Route::get('/rw/hapus/{id}','rwController@delete');
Route::get('/rw/tambah','rwController@tambah')->name('rwtambah');
Route::post('rw/store','rwController@store');

// rute tamu
Route::get('/tamu','TamuController@index')->name('tamu');
Route::get('/tamu/hapus/{id}','TamuController@delete');
Route::get('/tamu/tambah','TamuController@tambah')->name('rwtambah');
Route::post('tamu/store','TamuController@store');
Route::get('tamu/edit/{id}','TamuController@edit');
Route::post('tamu/update','TamuController@update');

// rute warga
Route::get('/warga','WargaController@index')->name('warga');
Route::get('/warga/hapus/{id}','WargaController@delete');
Route::get('/warga/tambah','WargaController@tambah')->name('wargatambah');
Route::post('warga/store','WargaController@store');
Route::get('warga/edit/{id}','WargaController@edit');
Route::post('warga/update','WargaController@update');
