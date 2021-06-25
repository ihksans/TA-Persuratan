<?php

use App\Http\Controllers\FirebaseController;
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
Route::post('login', 'AuthController@login');
Route::group(['middleware' => 'auth:sanctum'], function () {
    // manggil controller sesuai bawaan laravel 8
    Route::post('logout', 'AuthController@logout');
    // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
    Route::post('logoutall', 'AuthController@logoutall');
    Route::post('userInfo', 'AuthController@userInfo');
    Route::post('cekToken', 'AuthController@checkToken');
    Route::post('getPenggunaInfo', 'PenggunaController@index');
    Route::put('updateUser', 'PenggunaController@updateUser');

    //satria
        //pengguna
    Route::get('getPenggunaInfo', 'PenggunaController@index');
    Route::post('createUser', 'PenggunaController@createUser');
    Route::get('allPenggunaInfo','PenggunaController@allUser');
    Route::post('editUser/{request}','PenggunaController@editUser');
    Route::post('updateUser', 'PenggunaController@updateUser');
    Route::delete('deleteUser/{id}', 'PenggunaController@deleteUser');
        //disposisi
    Route::get('allInfoDisposisi','DisposisiController@allInfoDisposisi');
    Route::get('createDisposisi','DisposisiController@createDisposisis');
    Route::get('getDisposisi/{id}','DisposisiController@getDisposisi');
    Route::post('createDisposisi','DisposisiController@createDisposisis');
    Route::post('editDisposisi','DisposisiController@editDisposisi');
    Route::post('updateDisposisi','DisposisiController@updateDisposisi');
    Route::delete('deleteDisposisi/{id}','DisposisiController@deleteDisposisi');
    // Route::delete('deleteUser', 'PenggunaController@deleteUser');

    //ihksan
    Route::post('setPencatatan', 'PencatatanController@setPencatatan');
    Route::get('getPencatatanInfo/{id}', 'PencatatanController@getPencatatanInfo');
    Route::delete('delPencatatan/{id}', 'PencatatanController@delPencatatan');
    Route::post('updatePencatatan', 'PencatatanController@updatePencatatan');
    Route::get('getAllPencatatanInfo', 'PencatatanController@getAllPencatatanInfo');
    Route::delete('delAllPencatatan', 'PencatatanController@delAllPencatatan');

    Route::post('setSuratMasuk', 'SuratMasukController@setSuratMasuk');
    Route::get('getSuratMasuk/{id}', 'SuratMasukController@getSuratMasuk');
    Route::delete('delSuratMasuk/{id}', 'SuratMasukController@delSuratMasuk');
    Route::post('updateSuratMasuk', 'SuratMasukController@updateSuratMasuk');
    Route::get('getAllSuratMasuk', 'SuratMasukController@getAllSuratMasuk');
    Route::delete('delAllSuratMasuk', 'SuratMasukController@delAllSuratMasuk');
    Route::get('getLast', 'SuratMasukController@index');


    Route::get('getJenisSurat/{id}', 'JenisSuratController@getJenisSurat');
    Route::get('getAllJenisSurat', 'JenisSuratController@getAllJenisSurat');
    Route::delete('delAllJenisSurat', 'JenisSuratController@delAllJenisSurat');
    Route::delete('delJenisSurat/{id}', 'JenisSuratController@delJenisSurat');
    Route::post('setJenisSurat', 'JenisSuratController@setJenisSurat');
    Route::post('updateJenisSurat', 'JenisSuratController@updateJenisSurat');

    Route::get('getSifatNaskah/{id}', 'KodeSifatNaskahController@getSifatNaskah');
    Route::get('getAllSifatNaskah', 'KodeSifatNaskahController@getAllSifatNaskah');
    Route::delete('delAllSifatNaskah', 'KodeSifatNaskahController@delAllSifatNaskah');
    Route::delete('delSifatNaskah/{id}', 'KodeSifatNaskahController@delSifatNaskah');
    Route::post('setSifatNaskah', 'KodeSifatNaskahController@setSifatNaskah');
    Route::post('updateSifatNaskah', 'KodeSifatNaskahController@updateSifatNaskah');

    Route::get('getKodeUnit/{id}', 'KodeUnitKerjaController@getKodeUnit');
    Route::get('getAllKodeUnit', 'KodeUnitKerjaController@getAllKodeUnit');
    Route::delete('delAllKodeUnit', 'KodeUnitKerjaController@delAllKodeUnit');
    Route::delete('delKodeUnit/{id}', 'KodeUnitKerjaController@delKodeUnit');
    Route::post('setKodeUnit', 'KodeUnitKerjaController@setKodeUnit');
    Route::post('updateKodeUnit', 'KodeUnitKerjaController@updateKodeUnit');

    Route::get('getDerajatSurat/{id}', 'DerajatSuratController@getDerajatSurat');
    Route::get('getAllDerajatSurat', 'DerajatSuratController@getAllDerajatSurat');
    Route::delete('delAllDerajatSurat', 'DerajatSuratController@delAllDerajatSurat');
    Route::delete('delDerajatSurat/{id}', 'DerajatSuratController@delDerajatSurat');
    Route::post('setDerajatSurat', 'DerajatSuratController@setDerajatSurat');
    Route::post('updateDerajatSurat', 'DerajatSuratController@updateDerajatSurat');

    //firebase surat
    Route::post('addSurat', 'FirebaseController@setFile');
    Route::post('getSurat','FirebaseController@getFile');
    Route::post('donwloadFile','FirebaseController@donwloadFile');
    Route::delete('delSurat/{id}','FirebaseController@delSurat');
    Route::delete('cancelDownload/{id}','FirebaseController@cancelDownload');
});
