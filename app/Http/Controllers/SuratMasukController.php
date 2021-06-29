<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\JenisSurat;
class SuratMasukController extends Controller
{
    //
    public function index()
    {
        $last = SuratMasuk::all()->last()->NOMOR_AGENDA;
        $respon = [
            'Msg' => 'success',
            'content' => $last,
            ];
            return response()->json($respon,200);
    }
    public function setSuratMasuk(Request $request)
    {
        $data = [
            'ID_PENCATATAN' =>$request->id_pencatatan,
            'ID_PENGGUNA' =>$request->id_pengguna,
            'ID_JENIS_SURAT'=>$request->id_jenis_surat,
            'ID_DERAJAT_SURAT'=>$request->id_derajat_surat,
            'KODE_ARSIP_KOM'=>$request->kode_arsip_kom,
            'KODE_ARSIP_HLM'=>$request->kode_arsip_hlm,
            'KODE_ARSIP_MANUAL'=>$request->kode_arsip_manual,
            'NAMA_FILE_SURAT'=>$request->nama_file_surat,
            'NAMA_FILE_LAMPIRAN'=>$request->nama_file_lampiran,
            'ID_KODE_UNIT_KERJA'=>$request->id_kode_unit,
            'ID_SIFAT_NASKAH'=>$request->id_sifat_naskah,
            'NOMOR_SURAT'=>$request->nomor_surat,
            'NAMA_PENGIRIM'=>$request->nama_pengirim,
            'TUJUAN_SURAT'=>$request->tujuan_surat,
            'PERIHAL'=>$request->perihal,
            'TGL_DITERIMA'=>$request->tgl_diterima,
            'TGL_SURAT'=>$request->tgl_surat,
            'PENANDATANGAN'=>$request->penandatangan,
            'NOMOR_AGENDA'=>$request->no_agenda,
           
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
            'ID_DERAJAT_SURAT'=>$request->id_derajat_surat,
            'KODE_ARSIP_KOM'=>$request->kode_arsip_kom,
            'KODE_ARSIP_HLM'=>$request->kode_arsip_hlm,
            'KODE_ARSIP_MANUAL'=>$request->kode_arsip_manual,
            'NAMA_FILE_SURAT'=>$request->nama_file_surat,
            'NAMA_FILE_LAMPIRAN'=>$request->nama_file_lampiran,
            'ID_KODE_UNIT_KERJA'=>$request->id_kode_unit,
            'ID_SIFAT_NASKAH'=>$request->id_sifat_naskah,
            'NOMOR_SURAT'=>$request->nomor_surat,
            'NAMA_PENGIRIM'=>$request->nama_pengirim,
            'TUJUAN_SURAT'=>$request->tujuan_surat,
            'PERIHAL'=>$request->perihal,
            'TGL_DITERIMA'=>$request->tgl_diterima,
            'TGL_SURAT'=>$request->tgl_surat,
            'PENANDATANGAN'=>$request->penandatangan,
            'NOMOR_AGENDA'=>$request->no_agenda,
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
        $suratMasuk = SuratMasuk::orderBy('ID_PENCATATAN','desc')->get();
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
    public function getSuratDetail(){
        $suratMasuk = DB::table('surat_masuk')
        ->join('kode_unit_kerja','surat_masuk.ID_KODE_UNIT_KERJA','=','kode_unit_kerja.ID_KODE_UNIT_KERJA')
        ->join('jenis_surat','surat_masuk.ID_JENIS_SURAT','=','jenis_surat.ID_JENIS_SURAT')
        ->join('derajat_surat','surat_masuk.ID_DERAJAT_SURAT', '=','derajat_surat.ID_DERAJAT_SURAT')
        ->join('kode_sifat_naskah','kode_sifat_naskah.ID_SIFAT_NASKAH', '=','surat_masuk.ID_SIFAT_NASKAH')
        ->join('pengguna','pengguna.ID_PENGGUNA','=','surat_masuk.ID_PENGGUNA')
        ->select('surat_masuk.*','kode_unit_kerja.KODE_UNIT_KERJA','kode_unit_kerja.NAMA_UNIT_KERJA','jenis_surat.JENIS_SURAT','derajat_surat.DERAJAT_SURAT','kode_sifat_naskah.KODE_SIFAT_NASKAH','kode_sifat_naskah.SIFAT_NASKAH','pengguna.NAMA')        
        ->orderBy('ID_PENCATATAN','desc')
        ->get();
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
        return response()->json($respon);
    }
}
