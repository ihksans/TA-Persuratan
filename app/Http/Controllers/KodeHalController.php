<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KodeHal;
class KodeHalController extends Controller
{
    public function getAllKodeHal()
    {
        try{
            $result = KodeHal::all();
            return response()->json($result);          
        }catch(\Exception $e){
            $data = [
                'Msg'=> 'error'
            ];
            return response()->json($data);          
        }
    }
}
