<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\NomorSuratKeluar;
class NomorSuratKeluarController extends Controller
{
    public function index(){
        $result = NomorSuratKeluar::all();
        return response()->json($result);
    }
    public function setNomorSurat(Request $request){
        try{
            $last = DB::table('nomor_surat')->select('nomor_surat.TAHUN', 'nomor_surat.NOMOR_URUT')
            ->orderBy('TAHUN','desc')->get()->first();
                if( $request->tahun> $last->TAHUN )
                {
                    $no_urut = 1;
                }else if($last->TAHUN == $request->tahun){
                   $no_urut = $last->NOMOR_URUT + 1;
                }else{
                    $no_urut = $request->no_urut;
                }
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'err',
                'content' => null,
            ];                        
            return response()->json($respon,200);
        }
        
        $data = [
            'ID_KODE_UNIT_KERJA'=>$request->id_kode_unit,
            'ID_KODE_HAL'=>$request->id_kode_hal,
            'ID_KODE_PERGURUAN_TINGGI'=>$request->id_kode_pt, 
            'ID_SIFAT_NASKAH'=>$request->id_sifat_naskah,
            'NOMOR_URUT' =>$no_urut,
            'TAHUN'=>$request->tahun,
        ];
        try{
            $nomorSurat = NomorSuratKeluar::create($data);
            $respon = [
                'Msg' => 'success',
                'content' => $data,
                ];
                return response()->json($respon,200);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => $nomorSurat,
                ];
                return response()->json($respon);
        }
       

    }
    public function getNomorSurat($id)
    {
          try{
            $nomorSurat = NomorSuratKeluar::where('ID_NOMOR_SURAT', $id)->first();
            $respon =[
                'Msg' => 'success',
                'content' =>   $nomorSurat,
                ];       
                 return response()->json($respon);

        } catch(\Exception $ex){ 
            $respon =[
            'Msg' => 'error',
            'content' =>  $id,
            ];
        return response()->json($respon);
        } 
    }
    public function delNomorSurat($id){
        try{
            $nomorSurat = NomorSuratKeluar::where('ID_NOMOR_SURAT', $id);
            $nomorSurat->delete();
            $respon = [
                'Msg' => 'success',
                'content' => $id,
                ];
                return response()->json($respon,200);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => $id,
                ];
                return response()->json($respon);
        }
    }
    public function updateNomorSurat(Request $request){
        try{
            $nomorSurat = NomorSuratKeluar::where('ID_NOMOR_SURAT', $request->id_nomor_surat)
            ->update([
                'ID_KODE_UNIT_KERJA'=>$request->id_kode_unit,
                'ID_KODE_HAL'=>$request->id_kode_hal,
                'ID_KODE_PERGURUAN_TINGGI'=>$request->id_kode_pt, 
                'ID_SIFAT_NASKAH'=>$request->id_sifat_naskah,
                'NOMOR_URUT' =>$request->no_urut,
                'TAHUN'=>$request->tahun,
            ]);
            if($nomorSurat!=0 || $nomorSurat!= null){
                $respon = [
                    'Msg' => 'success',
                    'content' => $nomorSurat,
                ];
                }else{
                $respon = [
                    'Msg' => 'error',
                    'content' => null,
                ];
            }   
            return response()->json($respon);

        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => null,
                ];
                return response()->json($respon);
        }
    }
    public function getDetailNomorSurat(){
        try{
            $nomorSurat = DB::table('nomor_surat')
            ->join('kode_unit_kerja','kode_unit_kerja.ID_KODE_UNIT_KERJA','=','nomor_surat.ID_KODE_UNIT_KERJA')
            ->join('kode_hal','kode_hal.ID_KODE_HAL','=','nomor_surat.ID_KODE_HAL')
            ->join('kode_perguruan_tinggi','kode_perguruan_tinggi.ID_KODE_PERGURUAN_TINGGI','=','nomor_surat.ID_KODE_PERGURUAN_TINGGI')
            ->join('kode_sifat_naskah','kode_sifat_naskah.ID_SIFAT_NASKAH','=','nomor_surat.ID_SIFAT_NASKAH')
            ->select('nomor_surat.*','kode_unit_kerja.*')
            ->orderBy('ID_NOMOR_SURAT','desc')
            ->get();
            $respon = [
                'Msg' => 'success',
                'content' => $nomorSurat,
                ];
            return response()->json($respon);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => $nomorSurat,
                ];
                return response()->json($respon);
        }
    }
}
