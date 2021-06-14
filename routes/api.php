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
    Route::get('getPenggunaInfo', 'PenggunaController@index');
    Route::post('createUser', 'PenggunaController@createUser');
    Route::get('allPenggunaInfo','PenggunaController@allUser');
    Route::post('editUser','PenggunaController@editUser');
    Route::post('updateUser', 'PenggunaController@updateUser');
    Route::delete('deleteUser/{id}', 'PenggunaController@deleteUser');
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

    Route::post('getJenisSurat', 'JenisSuratController@getJenisSurat');
    Route::get('getAllJenisSurat', 'JenisSuratController@getAllJenisSurat');
    Route::delete('delAllJenisSurat', 'JenisSuratController@delAllJenisSurat');
    Route::delete('delJenisSurat/{id}', 'JenisSuratController@delJenisSurat');
    Route::post('setJenisSurat', 'JenisSuratController@setJenisSurat');
    Route::post('updateJenisSurat', 'JenisSuratController@updateJenisSurat');

    //firebase surat
    Route::post('addSurat', 'FirebaseController@setFile');
    Route::post('getSurat','FirebaseController@getFile');
    Route::post('saveSurat','FirebaseController@donwloadFile');










});
