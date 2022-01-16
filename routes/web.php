<?php

use Illuminate\Support\Facades\Route;

use RealRashid\SweetAlert\Facades\Alert;

use App\CagarBudaya;
use App\Pengajuan;
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
    $total_cagar_budaya = CagarBudaya::count();
    $cagar_budaya = CagarBudaya::orderBy('id', 'desc')->take(9)->get();
    return view('user_umum.home', compact('cagar_budaya', 'total_cagar_budaya'));
})->name('home');

Route::get('/cagarbudaya/{cagarbudaya}', function ($cagarbudaya) {
    $kategori = $cagarbudaya;
    $cagar_budaya = CagarBudaya::where('kategori', $cagarbudaya)->orderBy('id', 'desc')->get();
    return view('user_umum.cagarbudaya', compact('cagar_budaya', 'kategori'));
})->name('cagarbudaya');

Route::get('/peta', function () {
    $cagar_budaya = CagarBudaya::orderBy('id', 'desc')->get();
    return view('user_umum.peta', compact('cagar_budaya'));
})->name('peta');

Route::get('/rekap', function () {
    $rekap = CagarBudaya::orderBy('id', 'desc')->get();
    
    $data = Pengajuan::select([
        DB::raw('count(id) as `count`'), 
        DB::raw('MONTH(updated_at) as month')
    ])->groupBy('month')
    ->get();

    $bulan = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
    ];

    return view('user_umum.rekap', compact('rekap', 'data', 'bulan'));
})->name('rekap');

Auth::routes();

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/doLogin', 'AuthController@doLogin')->name('doLogin');
Route::get('/register', 'AuthController@register')->middleware('guest')->name('register');
Route::post('/doRegister', 'AuthController@doRegister')->name('doRegister');
Route::get('/logout', 'AuthController@logout')->name('logout');

// select2
// Route::get('/provinces', 'DaerahController@provinces_select')->name('provinces.select');
// Route::get('/regencies', 'DaerahController@regencies_select')->name('regencies.select');
// Route::get('/districts', 'DaerahController@districts_select')->name('districts.select');
// Route::get('/villages', 'DaerahController@villages_select')->name('villages.select');

Route::post('/saran/create', 'UserMasyarakatController@create_saran')->name('saran.create');

//INSTANSI
Route::group(['middleware' => ['auth', 'instansi']],function(){
    Route::get('/instansi_dashboard', 'instansiController@index')->name('instansi_dashboard');
    Route::get('/pengajuan', 'instansiController@pengajuan')->name('pengajuan');
    Route::get('/pengajuan/proses/{id}', 'instansiController@pengajuan_proses')->name('pengajuan.proses');
    Route::post('/pengajuan/setuju/{id}', 'instansiController@pengajuan_setuju')->name('pengajuan.setuju');
    Route::post('/pengajuan/tolak/{id}', 'instansiController@pengajuan_tolak')->name('pengajuan.tolak');
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
    Route::post('/cagarbudaya_benda/{id}/hapus', 'CagarBudayaController@hapus_benda')->name('cagarbudaya_benda.hapus');
    
    // ========================= END BENDA =================================
    
    // ========================= BANGUNAN =================================
    Route::get('/cagarbudaya_bangunan', 'CagarBudayaController@bangunan')->name('cagarbudaya_bangunan');
    Route::post('/cagarbudaya_bangunan_create', 'CagarBudayaController@create_bangunan')->name('cagarbudaya_bangunan.create');
    Route::get('/cagarbudaya_bangunan/{id}', 'CagarBudayaController@edit_bangunan')->name('cagarbudaya_bangunan.edit');
    Route::post('/cagarbudaya_bangunan/{id}/update', 'CagarBudayaController@update_bangunan')->name('cagarbudaya_bangunan.update');
    Route::post('/cagarbudaya_bangunan/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_bangunan')->name('cagarbudaya_bangunan.editlokasi');
    Route::post('/cagarbudaya_bangunan/{id}/hapus', 'CagarBudayaController@hapus_bangunan')->name('cagarbudaya_bangunan.hapus');
    // ========================= END BANGUNAN =================================
    
    // ========================= STRUKTUR =================================
    Route::get('/cagarbudaya_struktur', 'CagarBudayaController@struktur')->name('cagarbudaya_struktur');
    Route::post('/cagarbudaya_struktur_create', 'CagarBudayaController@create_struktur')->name('cagarbudaya_struktur.create');
    Route::get('/cagarbudaya_struktur/{id}', 'CagarBudayaController@edit_struktur')->name('cagarbudaya_struktur.edit');
    Route::post('/cagarbudaya_struktur/{id}/update', 'CagarBudayaController@update_struktur')->name('cagarbudaya_struktur.update');
    Route::post('/cagarbudaya_struktur/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_struktur')->name('cagarbudaya_struktur.editlokasi');
    Route::post('/cagarbudaya_struktur/{id}/hapus', 'CagarBudayaController@hapus_struktur')->name('cagarbudaya_struktur.hapus');
    // ========================= END STRUKTUR =================================
    
    // ========================= SITUS =================================
    Route::get('/cagarbudaya_situs', 'CagarBudayaController@situs')->name('cagarbudaya_situs');
    Route::post('/cagarbudaya_situs_create', 'CagarBudayaController@create_situs')->name('cagarbudaya_situs.create');
    Route::get('/cagarbudaya_situs/{id}', 'CagarBudayaController@edit_situs')->name('cagarbudaya_situs.edit');
    Route::post('/cagarbudaya_situs/{id}/update', 'CagarBudayaController@update_situs')->name('cagarbudaya_situs.update');
    Route::post('/cagarbudaya_situs/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_situs')->name('cagarbudaya_situs.editlokasi');
    Route::post('/cagarbudaya_situs/{id}/hapus', 'CagarBudayaController@hapus_situs')->name('cagarbudaya_situs.hapus');
    // ========================= END SITUS =================================
    
    // ========================= KAWASAN =================================
    Route::get('/cagarbudaya_kawasan', 'CagarBudayaController@kawasan')->name('cagarbudaya_kawasan');
    Route::post('/cagarbudaya_kawasan_create', 'CagarBudayaController@create_kawasan')->name('cagarbudaya_kawasan.create');
    Route::get('/cagarbudaya_kawasan/{id}', 'CagarBudayaController@edit_kawasan')->name('cagarbudaya_kawasan.edit');
    Route::post('/cagarbudaya_kawasan/{id}/update', 'CagarBudayaController@update_kawasan')->name('cagarbudaya_kawasan.update');
    Route::post('/cagarbudaya_kawasan/{id}/edit_lokasi', 'CagarBudayaController@editlokasi_kawasan')->name('cagarbudaya_kawasan.editlokasi');
    Route::post('/cagarbudaya_kawasan/{id}/hapus', 'CagarBudayaController@hapus_kawasan')->name('cagarbudaya_kawasan.hapus');
    // ========================= END KAWASAN =================================
    
    // ========================= TIM PELAKSANA =================================
    Route::resource('/timpelaksana', 'TimPelaksanaController');
    Route::post('/timkegiatan/{id}/update', 'TimPelaksanaController@timkegiatan_update')->name('timkegiatan.update');
    // ========================= END TIM PELAKSANA =================================
    
    // ========================= KEGIATAN =================================
    Route::resource('/kegiatan', 'KegiatanController');
    // ========================= END KEGIATAN =================================
    

    Route::get('/saran', 'AdminController@saran')->name('saran.index');

    Route::get('/wilayah', 'WilayahController@index')->name('wilayah');
    Route::get('/wilayah/{id}/lihat', 'WilayahController@lihat')->name('wilayah.lihat');

    Route::get('/perizinan', 'PerizinanController@index')->name('perizinan');
});

//USER UMUM
Route::group(['middleware' => ['auth', 'masyarakat']],function(){
    Route::get('/dashboard-masyarakat/{id}', 'UsermasyarakatController@dashboard')->name('masyarakat');
    Route::get('/pengajuan_user/{id}', 'UsermasyarakatController@pengajuan')->name('pengajuan_user');
    Route::post('/pengajuan_user/{id}/create', 'UsermasyarakatController@pengajuan_create')->name('pengajuan_user.create');
    Route::get('/masyarakat/{id}/profil', 'UsermasyarakatController@profil')->name('profil_user');
    Route::get('/masyarakat/{id}/detailprofil', 'UsermasyarakatController@detail_profil')->name('profil_user.detail');
    Route::post('/masyarakat/{id}/update', 'UsermasyarakatController@profil_update')->name('profil_user.update');
    Route::get('/masyarakat/{id}/gantipassword', 'UsermasyarakatController@profil_ganti_password')->name('profil_user.gantipassword');
    Route::post('/masyarakat/{id}/updatepassword', 'UsermasyarakatController@profil_update_password')->name('profil_user.updatepassword');

});


