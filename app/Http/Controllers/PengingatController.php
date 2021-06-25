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
    public function createPengingat(Request $request)
    {
        $data = [
            'ID_PENGINGAT' => $request->ID_PENGINGAT,
            'ID_PENGGUNA' => $request->ID_PENGGUNA,
            'ID_PENCATATAN' => $request->ID_PENCATATAN,
            'WAKTU_PENGINGAT' => $request->WAKTU_PENGINGAT,
            'DESKRIPSI' => $request->DESKRIPSI,
            'STATUS' => $request->STATUS,
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
        $pengingat = Pengingat::where('ID_PENCATATAN', $id);
        // if($pengingat == null){
        //     $respon =[
        //         'Msg' => 'error',
        //         'content' =>  [],
        //     ];
        //     return response()->json($respon);
        // }
        // $respon=[
        //     'Msg' => 'success',
        //     'content' => $pengingat,
        // ];
        return response()->json($pengingat,200);
    }
    public function getAllPengingat()
    {
        //$pengingat = Pengingat::all();
        $pengingat = Pengingat::orderBy('WAKTU_PENGINGAT','ASC')->get();
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
    public function deletePengingat($id)
    {
        $pengingat = Pengingat::where('ID_PENGINGAT',$id);
        $pengingat->delete();
        if(!$pengingat){
            $respon = [
                'msg' => 'delete failed',
                'error' => 'delete pengingat'
            ];
            return response()->json($respon);
        }
        if($id==null){
            $respon = [
                'msg' => 'delete failed',
                'error' => 'delete pengingat'
            ];
            return response()->json($respon);
        }      
        return response()->json($pengingat);
    }
}