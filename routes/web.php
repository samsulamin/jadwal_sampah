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

// Route::get('/', function () {
//     return view('welcome');
// });

//admin
//Route::get('login', 'adminSuperController@login');
Route::get('/', 'adminSuperController@regisDesa');
Route::post('regisdesa', 'adminDataController@registrasiDesa');

Route::get('dashboard', 'adminSuperController@index')->name('admin.home');
Route::get('data-desa', 'adminSuperController@datadesa');
Route::post('post-desa', 'adminDataController@addDataDesa');
Route::get('edit-desa/{id}', 'adminDataController@editDataDesa');
Route::post('update-desa/{id}', 'adminDataController@updateDesa');
Route::get('admin-recycle', 'adminRestoreController@indexrestoredesa');
Route::get('hapus-desa/{id}', 'adminRestoreController@hapusdesa');
Route::get('kembalikan-desa/{id}', 'adminRestoreController@kembalikandesa');
//akuun desa
Route::get('data-desa-akun', 'adminSuperController@akundesa');
Route::get('edit-desa-akun/{id}', 'adminDataController@editakundesa');
Route::post('edit-desa-akun/{id}', 'adminDataController@updateakundesa');
Route::get('admin-recycle-akun', 'adminRestoreController@indexrestoreakun');
Route::get('hapus-desa-akun/{id}', 'adminRestoreController@hapusakundesa');
Route::get('kembalikan-desa-akun/{id}', 'adminRestoreController@kembalikanakun');

Route::get('data-petugas', 'adminSuperController@datapetugas');
Route::get('data-warga', 'adminSuperController@datawarga');
Route::get('laporan', 'adminSuperController@laporan');
Route::get('profile', 'adminSuperController@profile');

//desa login
Route::get('desa-login', 'Auth\AdminAuthController@getLogin');
Route::post('desa-login', 'Auth\AdminAuthController@postLogin')->name('admin.desa');
//Route::middleware('auth:admin')->group(function(){
    //desa home
    Route::get('desa-home', 'desaSuperController@index')->name('desa.home');
    //desa petugas
    Route::get('desa-petugas', 'desaSuperController@desapetugas');
    Route::post('desa-petugas', 'desaDataPetugasController@addDataPetugas')->name('post.petugas');
    Route::get('edit-petugas/{id}', 'desaDataPetugasController@editpetugas');
    Route::post('update-petugas/{id}', 'desaDataPetugasController@updatepetugas');
    Route::get('hapus-petugas/{id}', 'desaRestoreController@hapuspetugas');
    Route::get('kembalikan-petugas/{id}', 'desaRestoreController@kembalikanpetugas');
    Route::get('desa-recycle-petugas', 'desaRestoreController@indexpetugas');
    //desa warga
    
    Route::get('desa-pengajuan-warga', 'desaSuperController@desapengajuanwarga');
    Route::get('desa-warga', 'desaSuperController@desawarga');
    Route::get('edit-warga', 'desaWargaController@editwarga');
    Route::get('hapus-pengajuan-warga/{id}', 'desaRestoreController@hapuspengajuan');

    Route::get('desa-jadwal', 'desaSuperController@desajadwal');
    Route::post('post-desa-jadwal', 'desaJadwalController@postjadwal');
    Route::get('edit-jadwal/{id}', 'desaJadwalController@editjadwal');
    Route::post('edit-desa-jadwal/{id}', 'desaJadwalController@editdesajadwal');

    Route::get('desa-laporan', 'desaSuperController@desalaporan');
    Route::get('desa-notifikasi', 'notifikasiController@notifikasi');
    Route::post('desa-angkut/{id}','notifikasiController@angkut');

    Route::get('desa-profile', 'desaSuperController@desaprofile');
    Route::get('desa-recycle-warga', 'desaRestoreController@index');

    Route::get('desa-ganti-password/{id}', 'desaSuperController@gantipassword');
    Route::post('ganti-password/{id}', 'desaSuperController@gantipassword');
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cekemail', 'api\wargaController@cekEmail');

