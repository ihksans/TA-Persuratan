<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\JenisSurat;
class SuratMasukController extends Controller
{
    //
    public function index(Request $request)
    {

    }
    public function setSuratMasuk(Request $request)
    {
        $data = [
            'ID_PENCATATAN' =>$request->id_pencatatan,
            'ID_PENGGUNA' =>$request->id_pengguna,
            'ID_JENIS_SURAT'=>$request->id_jenis_surat,
            'KODE_ARSIP_KOM'=>$request->kode_arsip_kom,
            'KODE_ARSIP_HLM'=>$request->kode_arsip_hlm,
            'KODE_ARSIP_MANUAL'=>$request->kode_arsip_manual,
            'NAMA_FILE_SURAT'=>$request->nama_file_surat,
            'NAMA_FILE_LAMPIRAN'=>$request->nama_file_lampiran,
            'DERAJAT_SURAT'=>$request->derajat_surat,
            'NOMOR_SURAT'=>$request->nomor_surat,
            'UNIT_PENGIRIM'=>$request->unit_pengirim,
            'PENANDATANGAN'=>$request->penandatangan,
            'NAMA_PENGIRIM'=>$request->nama_pengirim,
            'TUJUAN_SURAT'=>$request->tujuan_surat,
            'PERIHAL'=>$request->perihal,
            'TGL_DITERIMA'=>$request->tgl_diterima,
            'TGL_SURAT'=>$request->tgl_surat,
        ];
        $suratMasuk = SuratMasuk::create($data);
        if(!$suratMasuk){
            $respon = [
                'Msg' => 'error',
                'content' => $suratMasuk,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $suratMasuk,
            ];
            return response()->json($respon,200);
    }
    public function getSuratMasuk($id)
    {
        $suratMasuk = SuratMasuk::where('ID_PENCATATAN', $id)->first();
        if($suratMasuk == null){
            $respon =[
            'Msg' => 'error',
            'content' =>  $id,
            ];
        return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' =>  $suratMasuk,
            ];
        return response()->json($respon);
    }
    public function delSuratMasuk($id)
    {
        $suratMasuk = SuratMasuk::where('ID_PENCATATAN', $id);
        $suratMasuk->delete();
        if(!$suratMasuk){
            $respon = [
                'Msg' => 'error',
                'content' => $id,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $id,
            ];
            return response()->json($respon,200);
    }
    public function updateSuratMasuk(Request $request)
    {
        $suratMasuk = SuratMasuk::where('ID_PENCATATAN', $request->id_pencatatan)
        ->update([
            'ID_PENCATATAN' =>$request->id_pencatatan,
            'ID_PENGGUNA' =>$request->id_pengguna,
            'ID_JENIS_SURAT'=>$request->id_jenis_surat,
            'KODE_ARSIP_KOM'=>$request->kode_arsip_kom,
            'KODE_ARSIP_HLM'=>$request->kode_arsip_hlm,
            'KODE_ARSIP_MANUAL'=>$request->kode_arsip_manual,
            'NAMA_FILE_SURAT'=>$request->nama_file_surat,
            'NAMA_FILE_LAMPIRAN'=>$request->nama_file_lampiran,
            'DERAJAT_SURAT'=>$request->derajat_surat,
            'NOMOR_SURAT'=>$request->nomor_surat,
            'UNIT_PENGIRIM'=>$request->unit_pengirim,
            'PENANDATANGAN'=>$request->penandatangan,
            'NAMA_PENGIRIM'=>$request->nama_pengirim,
            'TUJUAN_SURAT'=>$request->tujuan_surat,
            'PERIHAL'=>$request->perihal,
            'TGL_DITERIMA'=>$request->tgl_diterima,
            'TGL_SURAT'=>$request->tgl_surat,
        ]);
        if(!$suratMasuk){
            $respon = [
                'Msg' => 'error',
                'content' => $request->id_pencatatan,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $suratMasuk,
            ];
            return response()->json($respon,200);

    }
    public function getAllSuratMasuk()
    {
        $suratMasuk = SuratMasuk::all();
        if(!$suratMasuk){
            $respon = [
                'Msg' => 'error',
                'content' => $suratMasuk,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $suratMasuk,
            ];
            return response()->json($respon,200);
    }
    public function delAllSuratMasuk()
    {
        $suratMasuk = SuratMasuk::truncate();
        if(!$suratMasuk){
            $respon = [
                'Msg' => 'error',
                'content' => $suratMasuk,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $suratMasuk,
            ];
            return response()->json($respon,200);
    }
}