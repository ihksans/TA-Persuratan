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
    // public function allInfoDisposisi(){
        public function allInfoDisposisi($id){
        $disposisi = DB::table('disposisi')
        ->join('surat_masuk','disposisi.ID_PENCATATAN','=','surat_masuk.ID_PENCATATAN')
        ->where('JENIS_DISPOSISI',$id)
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
            'PROSES_SELANJUTNYA'=>$request->proses_selanjutnya,
            'INFORMASI'=>$request->informasi,
            'NOMOR_AGENDA'=>$request->nomor_agenda,
            'JENIS_DOSPOSISI'=>$request->jenis_disposisi,
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
        $disposisi = Disposisi::where('ID_DISPOSISI', $request->id)->update([
            // 'ID_PENGGUNA'=>$request->id_pengguna,
            // 'ID_PENCATATAN'=>$request->id_pencatatan,
            // 'TANGGAL_DISPOSISI'=>$request->tanggal_disposisi,
            // 'NOMOR_DISPOSISI'=>$request->nomor_disposisi,
            'PROSES_SELANJUTNYA'=>$request->proses_selanjutnya,
            'INFORMASI'=>$request->informasi,
            'NOMOR_AGENDA'=>$request->nomor_agenda,
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
