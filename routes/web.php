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

Auth::routes();

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/doLogin', 'AuthController@doLogin')->name('doLogin');
Route::get('/register', 'AuthController@register')->middleware('guest')->name('register');
Route::post('/doRegister', 'AuthController@doRegister')->name('doRegister');
Route::get('/logout', 'AuthController@logout')->name('logout');


//INSTANSI
Route::group(['middleware' => ['auth', 'instansi']],function(){
    Route::get('/instansi_dashboard', 'instansiController@index')->name('instansi_dashboard');
    Route::get('/pengajuan', 'instansiController@pengajuan')->name('pengajuan');
});

//ADMIN
Route::group(['middleware' => ['auth', 'admin']],function(){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');

    // Route::get('/cagarbudaya', 'CagarBudayaController@index')->name('cagarbudaya');

    // ========================= BENDA =================================
    Route::get('/cagarbudaya_benda', 'CagarBudayaController@benda')->name('cagarbudaya_benda');
    Route::post('/cagarbudaya_benda_create', 'CagarBudayaController@create_benda')->name('cagarbudaya_benda.create');
    Route::get('/cagarbudaya_benda/{id}', 'CagarBudayaController@edit_benda')->name('cagarbudaya_benda.edit');
    Route::post('/cagarbudaya_benda/{id}/update', 'CagarBudayaController@update_benda')->name('cagarbudaya_benda.update');
    Route::post('/cagarbudaya_benda/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_benda')->name('cagarbudaya_benda.editlokasi');
    // ========================= END BENDA =================================
    
    // ========================= BANGUNAN =================================
    Route::get('/cagarbudaya_bangunan', 'CagarBudayaController@bangunan')->name('cagarbudaya_bangunan');
    Route::post('/cagarbudaya_bangunan_create', 'CagarBudayaController@create_bangunan')->name('cagarbudaya_bangunan.create');
    Route::get('/cagarbudaya_bangunan/{id}', 'CagarBudayaController@edit_bangunan')->name('cagarbudaya_bangunan.edit');
    Route::post('/cagarbudaya_bangunan/{id}/update', 'CagarBudayaController@update_bangunan')->name('cagarbudaya_bangunan.update');
    Route::post('/cagarbudaya_bangunan/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_bangunan')->name('cagarbudaya_bangunan.editlokasi');
    // ========================= END BANGUNAN =================================
    
    // ========================= STRUKTUR =================================
    Route::get('/cagarbudaya_struktur', 'CagarBudayaController@struktur')->name('cagarbudaya_struktur');
    Route::post('/cagarbudaya_struktur_create', 'CagarBudayaController@create_struktur')->name('cagarbudaya_struktur.create');
    Route::get('/cagarbudaya_struktur/{id}', 'CagarBudayaController@edit_struktur')->name('cagarbudaya_struktur.edit');
    Route::post('/cagarbudaya_struktur/{id}/update', 'CagarBudayaController@update_struktur')->name('cagarbudaya_struktur.update');
    Route::post('/cagarbudaya_struktur/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_struktur')->name('cagarbudaya_struktur.editlokasi');
    // ========================= END STRUKTUR =================================

    // ========================= SITUS =================================
    Route::get('/cagarbudaya_situs', 'CagarBudayaController@situs')->name('cagarbudaya_situs');
    Route::post('/cagarbudaya_situs_create', 'CagarBudayaController@create_situs')->name('cagarbudaya_situs.create');
    Route::get('/cagarbudaya_situs/{id}', 'CagarBudayaController@edit_situs')->name('cagarbudaya_situs.edit');
    Route::post('/cagarbudaya_situs/{id}/update', 'CagarBudayaController@update_situs')->name('cagarbudaya_situs.update');
    Route::post('/cagarbudaya_situs/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_situs')->name('cagarbudaya_situs.editlokasi');
    // ========================= END SITUS =================================
    
    // ========================= KAWASAN =================================
    Route::get('/cagarbudaya_kawasan', 'CagarBudayaController@kawasan')->name('cagarbudaya_kawasan');
    Route::post('/cagarbudaya_kawasan_create', 'CagarBudayaController@create_kawasan')->name('cagarbudaya_kawasan.create');
    Route::get('/cagarbudaya_kawasan/{id}', 'CagarBudayaController@edit_kawasan')->name('cagarbudaya_kawasan.edit');
    Route::post('/cagarbudaya_kawasan/{id}/update', 'CagarBudayaController@update_kawasan')->name('cagarbudaya_kawasan.update');
    Route::post('/cagarbudaya_kawasan/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_kawasan')->name('cagarbudaya_kawasan.editlokasi');
    // ========================= END KAWASAN =================================

    Route::get('/timpelaksana', 'TimPelaksanaController@index')->name('timpelaksana');

    Route::get('/kegiatan', 'KegiatanController@index')->name('kegiatan');

    Route::get('/wilayah', 'WilayahController@index')->name('wilayah');

    Route::get('/perizinan', 'PerizinanController@index')->name('perizinan');
});

//USER UMUM
Route::group(['middleware' => ['auth', 'umum']],function(){
    Route::get('/pengajuan_user', 'UserUmumController@pengajuan')->name('pengajuan_user');
    Route::get('/profil_user', 'UserUmumController@profil')->name('profil_user');
});



