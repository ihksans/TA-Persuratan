<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\Pencatatan;
use App\Models\JenisSurat;

class PencatatanController extends Controller
{
    public function index(Request $request)
    {

    }
    public function setPencatatan(Request $request)
    {
        
        $data = [
            'ID_PENGGUNA'=>$request->id_pengguna,
            'ID_JENIS_SURAT'=>$request->id_jenis_surat,
            'KODE_ARSIP_KOM'=>$request->kode_arsip_kom,
            'KODE_ARSIP_HLM'=>$request->kode_arsip_hlm,
            'KODE_ARSIP_MANUAL'=>$request->kode_arsip_manual,
            'NAMA_FILE_SURAT'=>$request->nama_file_surat,
            'NAMA_FILE_LAMPIRAN'=>$request->nama_file_lampiran,
            'ID_DERAJAT_SURAT'=>$request->id_derajat_surat,
        ];
        $pencatatan = Pencatatan::create($data);

        if($pencatatan==null){
            $respon = [
                'Msg' => 'error',
                'content' => $pencatatan,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $pencatatan,
            ];
        return response()->json($respon);
    }
    public function getPencatatanInfo($id)
    {
        $pencatatan = Pencatatan::where('ID_PENCATATAN', $id)->first();
        if($pencatatan == null){
            $respon =[
            'Msg' => 'error',
            'content' =>  $pencatatan,
            ];
        return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' =>  $pencatatan,
            ];
        return response()->json($respon);
    }
    
    public function delPencatatan($id)
    {
        $pencatatan = Pencatatan::where('ID_PENCATATAN', $id);
        $result =  $pencatatan->delete();
        if($result != null){
            $respon =[
            'Msg' => 'error',
            'content' => $id,
            ];
        return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' => $id,
            ];
        return response()->json($respon);
    }
    public function updatePencatatan(Request $request)
    {
        $pencatatan = Pencatatan::where('ID_PENCATATAN', $request->id)
        ->update([
            'ID_PENGGUNA'=>$request->id_pengguna,
            'ID_JENIS_SURAT'=>$request->id_jenis_surat,
            'KODE_ARSIP_KOM'=>$request->kode_arsip_kom,
            'KODE_ARSIP_HLM'=>$request->kode_arsip_hlm,
            'KODE_ARSIP_MANUAL'=>$request->kode_arsip_manual,
            'NAMA_FILE_SURAT'=>$request->nama_file_surat,
            'NAMA_FILE_LAMPIRAN'=>$request->nama_file_lampiran,
            'ID_DERAJAT_SURAT'=>$request->id_derajat_surat,
        ]);
        if(!$pencatatan){
            $respon =[
                'Msg' => 'failed',
                'content' => $pencatatan,
                ];
            return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' => $pencatatan,
            ];
        return response()->json($respon);
    
    }

    public function getAllPencatatanInfo()
    {
        $pencatatan = Pencatatan::all();
        if(!$pencatatan)
        {
            $respon =[
                'Msg' => 'failed',
                'content' => $pencatatan,
                ];
            return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' => $pencatatan,
            ];
        return response()->json($respon);
    }
    public function delAllPencatatan()
    {
        $pencatatan = Pencatatan::truncate();
        if(!$pencatatan)
        {
            $respon =[
                'Msg' => 'failed',
                'content' => $pencatatan,
                ];
            return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' => $pencatatan,
            ];
        return response()->json($respon);
    }
}
