<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Disposisi;
use App\Models\SuratMasuk;
use App\Models\Pencatatan;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function allInfoDisposisiSuratMasuk(){
        // public function allInfoDisposisi($id){
        $disposisi = DB::table('disposisi')
        ->join('surat_masuk','disposisi.ID_PENCATATAN','=','surat_masuk.ID_PENCATATAN')
        ->join('pencatatan','disposisi.ID_PENCATATAN','=','pencatatan.ID_PENCATATAN')
        ->where('JENIS_DISPOSISI',1)
        ->select('disposisi.*','surat_masuk.*','pencatatan.*')
        ->get();
        
        return response()->json($disposisi);
    }
    public function allInfoDisposisiSuratKeluar(){
        // public function allInfoDisposisi($id){
        $disposisi = DB::table('disposisi')
        ->join('surat_masuk','disposisi.ID_PENCATATAN','=','surat_masuk.ID_PENCATATAN')
        ->where('JENIS_DISPOSISI',2)
        ->select('disposisi.*','surat_masuk.*')
        ->get();
        
        return response()->json($disposisi);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDisposisis(Request $request)
    {
        $data = [
            'ID_PENGGUNA'=>$request->id_pengguna,
            'ID_PENCATATAN'=>$request->id_pencatatan,
            'TANGGAL_DISPOSISI'=>$request->tanggal_disposisi,
            'NOMOR_DISPOSISI'=>$request->nomor_disposisi,
            // tujuan
            'ID_KODE_UNIT_KERJA'=>$request->id_kode_unit,
            'INFORMASI'=>$request->informasi,
            'PROSES_SELANJUTNYA'=>$request->proses_selanjutnya,
            'NOMOR_AGENDA'=>$request->nomor_agenda,
            'JENIS_DISPOSISI'=>$request->jenis_disposisi,
            'NAMA_FILE_DISPOSISI'=>$request->nama_file_disposisi,
        ];
        $disposisi = Disposisi::create($data);
        if($disposisi ==null){
            $respon=[
                'Msg' => 'error',
                'content' => $disposisi,
                ];
                return response()->json($respon);
        }
        $respon = [
            'Msg' => 'success',
            'content' => $disposisi,
            ];
        return response()->json($respon);
    }
        
    public function getDisposisi($id){
        $disposisi = DB::table('disposisi')
        ->join('surat_masuk','disposisi.ID_PENCATATAN','=','surat_masuk.ID_PENCATATAN')
        ->where('ID_DISPOSISI',$id)
        ->select('disposisi.*','surat_masuk.*')
        
        ->get();
        return response()->json($disposisi);
    }

    public function getDisposisiByID($id){
        $disposisi = Disposisi::where('ID_PENCATATAN', $id)->first();     if($disposisi==null){
            $respon = [
                'content' => null
            ];
            return response()->json($respon);
        }   
        $respon = [
            'content' => $disposisi
        ];
        return response()->json($respon);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDisposisi(Request $request)
    {
        $disposisi = Disposisi::where('ID_DISPOSISI', $request->id)
        ->update([
            // 'ID_PENGGUNA'=>$request->id_pengguna,
            // 'ID_PENCATATAN'=>$request->id_pencatatan,
            // 'ID_DISPOSISI'=>$request->id,
            'TANGGAL_DISPOSISI'=>$request->tanggal_disposisi,
            // 'NOMOR_DISPOSISI'=>$request->nomor_disposisi,
            'PROSES_SELANJUTNYA'=>$request->proses_selanjutnya,
            'INFORMASI'=>$request->informasi,
            // 'PROSES_SELANJUTNYA'=>$request->keteranganDisposisi,
            // 'INFORMASI'=>$request->informasiDisposisi,
            'NOMOR_AGENDA'=>$request->nomor_agenda,
            'NAMA_FILE_DISPOSISI'=>$request->nama_file_disposisi,
        ]);
        if(!$disposisi){
            $respon =[
                'Msg' => 'failed',
                'content' => $disposisi,
                ];
            return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' => $disposisi,
            ];
        return response()->json($respon);
    }
    public function showData()
    {
        $count = DB::table('surat_masuk')->count();
        $respon =[
            'Msg' => 'success',
            'content' => $count,
            ];
        return response()->json($respon);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateDisposisi(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteDisposisi($id)
    {
        // $suratMasuk = Pencatatan::where('ID_PENCATATAN', $id)->first();
        $disposisi = Disposisi::where('ID_DISPOSISI',$id);
        $result =  $disposisi->delete();
        if($result != null){
            $respon =[
            'Msg' => 'success',
            'content' => $id,
            ];
        return response()->json($respon);
        }
        $respon =[
            'Msg' => 'Belum terhapus',
            'content' => $id,
            ];
        return response()->json($respon);
    }
}
