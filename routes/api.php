<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//kecamatan get
Route::get('kecamatan', 'api\dropdowncontroller@datakecamatan');
Route::get('desa', 'api\dropdowncontroller@datadesa');

Route::get('wargaget', 'api\notifikasiController@wargaget');

Route::post('post-warga', 'api\wargaController@store');
Route::post('create-lapor', 'api\notifikasiController@createlaporan');

Route::get('daynow', 'api\notifikasiController@daynow');

Route::post('login', 'api\logincontroller@login');
Route::post('loginwarga', 'api\logincontroller@loginwarga');

Route::group(['middleware' => ['auth:api']], function(){

    Route::get('datapengajuan', 'api\petugasdatacontroller@datapengajuan');
    Route::post('updatepengajuan', 'api\petugasdatacontroller@updatePengajuan');

});