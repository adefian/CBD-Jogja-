<?php

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

Route::get('/', function () {
    return view('user_umum.home');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register', 'AuthController@register')->name('register');


//ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');

// Route::get('/cagarbudaya', 'CagarBudayaController@index')->name('cagarbudaya');
Route::get('/cagarbudaya_benda', 'CagarBudayaController@benda')->name('cagarbudaya_benda');
Route::get('/cagarbudaya_bangunan', 'CagarBudayaController@bangunan')->name('cagarbudaya_bangunan');
Route::get('/cagarbudaya_struktur', 'CagarBudayaController@struktur')->name('cagarbudaya_struktur');
Route::get('/cagarbudaya_situs', 'CagarBudayaController@situs')->name('cagarbudaya_situs');
Route::get('/cagarbudaya_kawasan', 'CagarBudayaController@kawasan')->name('cagarbudaya_kawasan');

Route::get('/timpelaksana', 'TimPelaksanaController@index')->name('timpelaksana');

Route::get('/kegiatan', 'KegiatanController@index')->name('kegiatan');

Route::get('/wilayah', 'WilayahController@index')->name('wilayah');

Route::get('/perizinan', 'PerizinanController@index')->name('perizinan');

//INSTANSI
Route::get('/instansi_dashboard', 'instansiController@index')->name('instansi_dashboard');
Route::get('/pengajuan', 'instansiController@pengajuan')->name('pengajuan');

//USER UMUM
Route::get('/pengajuan_user', 'UserUmumController@pengajuan')->name('pengajuan_user');
Route::get('/profil_user', 'UserUmumController@profil')->name('profil_user');




