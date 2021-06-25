<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\Pengingat;

class PengingatController extends Controller
{
    //
    public function index(Request $request)
    {

    }
    public function setPengingat(Request $request)
    {
        $data = [
            'ID_PENGINGAT' => $request->id_pengingat,
            'ID_PENGGUNA' => $request->id_pengguna,
            'ID_PENCATATAN' => $request->id_pencatatan,
            'WAKTU_PENGINGAT' => $request->waktu_pengingat,
            'DESKRIPSI' => $request->deskripsi,
            'STATUS' => $request->status,
        ];
        $pengingat = Pengingat::create($data);
        if(!$pengingat){
            $respon = [
                'Msg' => 'error',
                'content' => $pengingat,
                ];
            return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $pengingat,
            ];
        return response()->json($respon,200);
    }
    public function getPengingat($id)
    {
        $pengingat = Pengingat::where('ID_PENCATATAN', $id)->first();
        if($pengingat == null){
            $respon =[
                'Msg' => 'error',
                'content' =>  $id,
            ];
            return response()->json($respon);
        }
        return response()->json($pengingat,200);
    }
    public function getAllPengingat()
    {
        $pengingat = Pengingat::all();
        if(!$pengingat){
            $respon =[
                'Msg' => 'Tidak ada pengingat',
                'error' => 'Pengingat'
            ];
            return response()->json($respon);
        }
        return response()->json($pengingat,200);
    }
    public function updatePengingat(Request $request)
    {
        $pengingat = Pengingat::where('ID_PENCATATAN',$request->ID_PENCATATAN)
        ->update([
            'ID_PENGINGAT' => $request->ID_PENGINGAT,
            'ID_PENGGUNA' => $request->ID_PENGGUNA,
            'ID_PENCATATAN' => $request->ID_PENCATATAN,
            'WAKTU_PENGINGAT' => $request->WAKTU_PENGINGAT,
            'DESKRIPSI' => $request->DESKRIPSI,
            'STATUS' => $request->STATUS,
        ]);
        if(!$pengingat){
            $respon = [
                'Msg' => 'update failed',
                'content' => 'updatePengingat',
                ];
            return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $pengingat,
            ];
        return response()->json($pengingat);
    }
}