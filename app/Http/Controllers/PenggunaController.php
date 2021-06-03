<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

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
    public function allUser(Request $request){
        $user = Pengguna::all();
        if($user==null){
            $respon=[
                'msg' => 'Tidak ada penguna',
                'error' => 'Pengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user,200);
    }
    public function createUser(Request $request){
        $request->validate([
            'USERNAME' => 'required',
            'NAMA' => 'required',
            'PASSWORD' => 'required',
            'ROLE' => 'required',
        ]);
        $data=[
            'USERNAME' => $request->USERNAME,
            'PASSWORD' => Hash::make($request->PASSWORD),
            'NAMA' => $request->NAMA,
            'ROLE' => $request->ROLE,
        ];
        $user = Pengguna::create($data);
        if(!$user){
            $respon = [
                'msg' => 'created failed',
                'error' => 'createdPengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user);
    }
    public function editUser(Request $request){
        $user = Pengguna::where('ID_PENGGUNA',$request->id)->get();
        if(!$user){
            $respon = [
                'msg' => 'update failed',
                'error' => 'updatePengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user);
    }

    public function updateUser(Request $request){
        $user = Pengguna::where('ID_PENGGUNA',$request->id)
        ->update([
            'USERNAME' => $request->USERNAME,
            'PASSWORD' => Hash::make($request->PASSWORD),
            'NAMA' => $request->NAMA,
            'ROLE' => $request->ROLE,
        ]);
        if(!$user){
            $respon = [
                'msg' => 'update failed',
                'error' => 'updatePengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user);
    }

    public function deleteUser(Request $request){
        $user = Pengguna::where('ID_PENGGUNA', $request->id);
        $user->delete();
        if(!$user){
            $respon = [
                'msg' => 'delete failed',
                'error' => 'deletePengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user);
    }
}
