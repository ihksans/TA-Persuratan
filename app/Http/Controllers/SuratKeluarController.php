<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use Illuminate\Database\QueryException;
use App\Models\NomorSuratKeluar;

class SuratKeluarController extends Controller
{
    public function index(){
       
        try{
            $last = SuratKeluar::all()->last();
            $respon = [
                'Msg'=> 'success',
                'content'=> $last,
            ];
            return response()->json($respon,200);
    
        } catch(\Exception $ex){ 
            $respon = [
                'Msg'=> 'error',
                'content'=> null,
            ];
            return response()->json($respon);
        }
    }
    public function getLastNoAgenda(Request $request){
        try{
            $year = date("Y"); 

            $suratKeluar = SuratKeluar::where('TAHUN_AGENDA',  $year)->orderBy('NOMOR_AGENDA','desc')->first();
          
            $respon = [
                'Msg'=> 'success',
                'tahun'=> $suratKeluar->TAHUN_AGENDA,
                'no'=>$suratKeluar->NOMOR_AGENDA
            ];
            return response()->json($respon,200);
        }
        catch(\Exception $x){
            $respon = [
                'Msg'=> 'error',
                'tahun'=> null,
                'no'=>null
            ];
            return response()->json($respon);
        }
    }
    public function setSuratKeluar(Request $request)
    {
        try { 
            $last = SuratKeluar::all()->last();
            if($last->TAHUN_AGENDA!=$request->tahun_agenda){
                $no_agenda = 1;
            }else{
                $no_agenda = $last->NOMOR_AGENDA + 1;
            }
          } catch(\Exception $ex){ 
            $no_agenda = 1;
        }
        $respon = [
            'Msg' =>$no_agenda,
        ];
        $data = [
            'ID_PENCATATAN' =>$request->id_pencatatan,
            'ID_PENGGUNA' =>$request->id_pengguna,
            'ID_NOMOR_SURAT'=>$request->id_no_surat,
            'ID_PEMOHON'=>$request->id_pemohon,
            'TGL_KIRIM'=>$request->tgl_diterima,
            'NOMOR_AGENDA'=>$no_agenda,
            'TAHUN_AGENDA'=>$request->tahun_agenda,
        ];
        try{
               $suratKeluar = SuratKeluar::create($data);
                $respon = [
                    'Msg' => 'success',
                    'content' => $suratKeluar,
                ];
                return response()->json($respon);
        }catch(\Exception $ex){ 
                $respon = [
                    'Msg' => 'error',
                    'content' => null,
                ];
                return response()->json($respon);
        }
    }
    public function getSuratKeluar($id){
        try{
            $suratKeluar = SuratKeluar::where('ID_PENCATATAN', $id)->first();
            if($suratKeluar!=null){
                $respon =[
                    'Msg' => 'success',
                    'content' =>  $suratKeluar,
                    ];
                 
            }else{
                $respon =[
                    'Msg' => 'error',
                    'content' =>  null,
                    ];
            }
            return response()->json($respon);
        } catch(\Exception $ex){ 
            $respon =[
                'Msg' => 'error',
                'content' =>  $id,
                ];
            return response()->json($respon);
        }
    }
    public function delSuratKeluar($id , $no){        
        try{
            $suratKeluar = SuratKeluar::where('ID_PENCATATAN', $id);
            $suratKeluar->delete();
            try{
                $nomorSurat = NomorSuratKeluar::where('ID_NOMOR_SURAT', $no);
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
            return response()->json($respon,200);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => $id,
                ];
            return response()->json($respon);
        }
        
    }
    public function updateSuratKeluar(Request $request)
    {
        try{
            $suratKeluar = SuratKeluar::where('ID_PENCATATAN', $request->id_pencatatan)
            ->update([
                'ID_PENGGUNA' =>$request->id_pengguna,
                'ID_PENCATATAN' =>$request->id_pencatatan,
                'ID_NOMOR_SURAT'=>$request->id_no_surat,
                'ID_PEMOHON'=>$request->id_pemohon,
                'TGL_KIRIM'=>$request->tgl_diterima,
                'NOMOR_AGENDA'=>$request->no_agenda,
                'TAHUN_AGENDA'=>$request->tahun_agenda,
            ]);
            if($suratKeluar!=0 || $suratKeluar!= null){
                $respon = [
                    'Msg' => 'success',
                    'content' => $suratKeluar,
                    ];
                
            }else{
                $respon = [
                    'Msg' => 'error',
                    'content' => $suratKeluar,
                    ];
                
            }
                return response()->json($respon,200);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => null,
                ];
                return response()->json($respon);
        }
       
    }
    public function getAllSuratKeluar(){
        try{
            $suratKeluar = SuratKeluar::orderBy('ID_PENCATATAN','desc')->get();
            $respon = [
                'Msg' => 'success',
                'content' => $suratKeluar,
                ];
                return response()->json($respon,200);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => $suratKeluar,
                ];
                return response()->json($respon);
        }
    }
    public function delAllSuratKeluar(){
        try{
            $suratKeluar = SuratKeluar::truncate();
            $nomorSurat = NomorSuratKeluar::truncate();
            $respon = [
                'Msg' => 'success',
                'content' => $suratKeluar,
                'content2' => $nomorSurat
                ];
                return response()->json($respon,200);
        } catch(\Exception $ex){ 
            $respon = [
                'Msg' => 'error',
                'content' => $suratKeluar,
                ];
                return response()->json($respon);
        }
    }
    public function getSuratKeluarDetail(){
        try{
            $suratKeluar = DB::table('surat_keluar')
            ->join('pencatatan','pencatatan.ID_PENCATATAN','=','surat_keluar.ID_PENCATATAN')
            ->join('pengguna','pengguna.ID_PENGGUNA','=','surat_keluar.ID_PENGGUNA')
            ->join('pemohon','pemohon.ID_PEMOHON','=','surat_keluar.ID_PEMOHON')
            ->join('nomor_surat','nomor_surat.ID_NOMOR_SURAT','=','surat_keluar.ID_NOMOR_SURAT')
            ->join('kode_unit_kerja','kode_unit_kerja.ID_KODE_UNIT_KERJA','=','nomor_surat.ID_KODE_UNIT_KERJA')
            ->join('kode_hal','kode_hal.ID_KODE_HAL','=','nomor_surat.ID_KODE_HAL')
            ->join('kode_perguruan_tinggi','kode_perguruan_tinggi.ID_KODE_PERGURUAN_TINGGI','=','nomor_surat.ID_KODE_PERGURUAN_TINGGI')
            ->join('kode_sifat_naskah','kode_sifat_naskah.ID_SIFAT_NASKAH','=','nomor_surat.ID_SIFAT_NASKAH')
            ->join('derajat_surat','derajat_surat.ID_DERAJAT_SURAT','=','pencatatan.ID_DERAJAT_SURAT')
            ->join('jenis_surat','jenis_surat.ID_JENIS_SURAT','=','pencatatan.ID_JENIS_SURAT')
            ->select('pencatatan.PERIHAL','pencatatan.KODE_ARSIP_KOM',
            'pencatatan.KODE_ARSIP_HLM','pencatatan.KODE_ARSIP_MANUAL',
            'pencatatan.NAMA_FILE_SURAT','pencatatan.NAMA_FILE_LAMPIRAN',
            'pencatatan.TGL_SURAT','pencatatan.PENANDATANGAN',
            'surat_keluar.*',
            'pengguna.NAMA',
            'pemohon.*',
            'nomor_surat.*',
            'kode_unit_kerja.*',
            'kode_hal.*',
            'kode_perguruan_tinggi.*',
            'kode_sifat_naskah.*',
            'derajat_surat.*',
            'jenis_surat.*')
            ->orderBy('ID_PENCATATAN','desc')
            ->get();
            $respon = [
                'Msg' => 'success',
                'content' => $suratKeluar,
            ];
            return response()->json($respon);
            } catch(\Exception $ex){ 
                $respon = [
                    'Msg' => 'error',
                    'content' => $suratKeluar,
                    ];
                    return response()->json($respon);
            }
    }
}
