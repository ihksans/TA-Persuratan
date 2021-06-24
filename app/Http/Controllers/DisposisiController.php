<?php

namespace App\Http\Controllers;

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
    public function allInfoDisposisi(Request $request){
        $disposisi = Disposisi::all();
        if($disposisi==null){
            $respon=[
                'msg' => 'Tidak ada penguna',
                'error' => 'Pengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($disposisi,200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDisposisis(Request $request)
    {
        // $suratMasuk = Pencatatan::where('ID_PENCATATAN', $id)->first();
        
        // $suratMasuk = Disposisi::where('ID_PENCATATAN', $request->id_pencatatan)->first();
        
        // if(!$suratMasuk){
        //     $respon = [
        //         'msg' => $request->id_pencatatan,
        //         'error' => 'create disposisi'
        //     ];
        //     return response()->json($suratMasuk);
        // }
        // $suratMasuk->validate([
        //     'ID_PENGGUNA'=>'required',
        //     'ID_PENCATATAN'=>'required',
        //     'TANGGAL_DISPOSISI'=>'required',
        //     'NOMOR_DISPOSISI'=>'required',
        //     'PROSES_SELANJUTNYA'=>'required',
        //     'INFORMASI'=>'required',
        //     'NOMOR_AGENDA'=>'required',
        // ]);
        // $data = [
        //     'ID_PENGGUNA'=>$suratMasuk->id_pengguna,
        //     'ID_PENCATATAN'=>$suratMasuk->id_pencatatan,
        //     'TANGGAL_DISPOSISI'=>$suratMasuk->tanggal_disposisi,
        //     'NOMOR_DISPOSISI'=>$suratMasuk->nomor_disposisi,
        //     'PROSES_SELANJUTNYA'=>$suratMasuk->proses_selanjutnya,
        //     'INFORMASI'=>$suratMasuk->informasi,
        //     'NOMOR_AGENDA'=>$suratMasuk->nomor_agenda,
        // ];
        $data = [
            'ID_PENGGUNA'=>$request->id_pengguna,
            'ID_PENCATATAN'=>$request->id_pencatatan,
            'TANGGAL_DISPOSISI'=>$request->tanggal_disposisi,
            'NOMOR_DISPOSISI'=>$request->nomor_disposisi,
            'PROSES_SELANJUTNYA'=>$request->proses_selanjutnya,
            'INFORMASI'=>$request->informasi,
            'NOMOR_AGENDA'=>$request->nomor_agenda,
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
        // $suratMasuk = Pencatatan::where('ID_PENCATATAN', $id)->first();
        // $disposisi = Disposisi::where('ID_DISPOSISI',$suratMasuk)->first();
        //seharusnya id pencatatan
        $disposisi = Disposisi::where('ID_DISPOSISI',$id)->first();
        if($disposisi == null){
            $respon =[
                'Msg' => 'Kosong',
                'content' =>  $id,
                ];
            return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' =>  $disposisi,
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
