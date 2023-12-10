<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Grid', function () {
    return view('Grid');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('validasi', function () {
    return view('valikdasi');
});

Route::get('tugas1', function () {
    return view('tugas1');
});

Route::get('tugas2', function () {
    return view('tugas2');
});

Route::get('tugas3', function () {
    return view('tugas3');
});


//href week 1

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampiljam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@keranjangbelanja');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');
Route::post('/keranjangbelanja/storeee','App\Http\Controllers\KeranjangController@storeee');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');




//route CRUD
Route::get('/mobil','App\Http\Controllers\MobilController@indexmobil');
Route::get('/mobil/tambahh','App\Http\Controllers\MobilController@tambahh');
Route::post('/mobil/storee','App\Http\Controllers\MobilController@storee');
Route::get('/mobil/editt/{id}','App\Http\Controllers\MobilController@editt');
Route::post('/mobil/updatee','App\Http\Controllers\MobilController@updatee');
Route::get('/mobil/hapuss/{id}','App\Http\Controllers\MobilController@hapuss');
Route::get('/mobil/carii','App\Http\Controllers\MobilController@carii');
Route::get('/mobil/vieww/{id}','App\Http\Controllers\MobilController@vieww');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahnilaikuliah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');
