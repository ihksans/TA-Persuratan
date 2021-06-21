<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KodeSifatNaskah;

class KodeSifatNaskahController extends Controller
{
    public function index($id)
    {
        $data = [
            'ID_SIFAT_NASKAH' => $id
        ];
        return response()->json($data);
    }
    public function setSifatNaskah(Request $request)
    {
        $data = [
            'SIFAT_NASKAH' => $request->sifatNaskah,
            'KODE_SIFAT_NASKAH' => $request->kodeSifatNaskah,
        ];
        $sifatNaskah = KodeSifatNaskah::create($data);
        if($sifatNaskah)
        {
            $respon = [
            'Msg' => 'success',
            'content' => $sifatNaskah,
            ];
            return response()->json($respon,200);
        }
        else{
            $respon = [
                'Msg' => 'error',
                'content' => $sifatNaskah,
                ];
            return response()->json($respon);
        }
    }
    public function getSifatSurat(Request $request)
    {

        $sifatNaskah = KodeSifatNaskah::where('ID_SIFAT_NASKAH', $request->id)->first();
        if($sifatNaskah == null){
            $respon =[
            'Msg' => 'error',
            'content' =>  $request,
            ];
        return response()->json($respon);
        }
        return response()->json($sifatNaskah);

    }
    public function getAllSifatSurat()
    {
        $sifatNaskah = KodeSifatNaskah::all();
        if($sifatNaskah == null){
            $respon =[
            'Msg' => 'error',
            'content' => $sifatNaskah,
            ];
        return response()->json($respon);
        }
        return response()->json($sifatNaskah);

    }
    public function delAllSifatSurat()
    {
        $sifatNaskah = KodeSifatNaskah::truncate();
        if($sifatNaskah == null){
            $respon =[
            'Msg' => 'error',
            'content' => $sifatNaskah,
            ];
        return response()->json($respon);
        }
        return response()->json($sifatNaskah);

    }
    public function delSifatSurat($id)
    {
        $sifatNaskah = KodeSifatNaskah::where('ID_SIFAT_NASKAH', $id);
        $sifatNaskah->delete();
        if($sifatNaskah != null){
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
   
    public function updateSifatSurat(Request $request)
    {
        $sifatNaskah = KodeSifatNaskah::where('ID_SIFAT_NASKAH', $request->id)
        ->update([
            'SIFAT_NASKAH' => $request->sifatNaskah,
            'KODE_SIFAT_NASKAH' => $request->kodeSifatNaskah,
        ]);
        if(!$sifatNaskah){
            $respon =[
                'Msg' => 'failed',
                'content' => $sifatNaskah,
                ];
            return response()->json($respon);
        }
        $respon =[
            'Msg' => 'success',
            'content' => $sifatNaskah,
            ];
        return response()->json($respon);
    }
}
