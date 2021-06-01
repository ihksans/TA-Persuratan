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
    public function createUser(Request $request){
        $request->validate([
          
            'USERNAME' => 'required',
            'NAMA' => 'required',
            'PASSWORD' => 'required',
            'ROLE' => 'required',
        ]);
        $username = $request->USERNAME;
        $nama = $request->NAMA;
        $password = Hash::make ($request->PASSWORD);
        $role = $request->ROLE;

        $data = [
            'USERNAME' => $username,
            'PASSWORD' => $password,
            'NAMA' => $nama,
            'ROLE' => $role,
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
    public function updateUser(Request $request){

    }
    public function deleteUser(Request $request){

    }
}
