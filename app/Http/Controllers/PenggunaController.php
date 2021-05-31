<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function index(Request $request){
        $user = Pengguna::where('ID_PENGGUNA', $request->id)->first();
        if($user == null){
            $respon = [
                'msg' => 'failed',
                'error' => 'Pengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user,200);
    }
}
