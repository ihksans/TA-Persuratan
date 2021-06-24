<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index(Request $request){
        $user = Pengguna::where('ID_PENGGUNA', $request->id)->first();
        if($user == null){
            $respon = [
                'msg' => 'failed',
                'error' => 'Pengguna',
                'content'=> $request->id
            ];
            return response()->json($respon);
        }
        return response()->json($user,200);
    }
<<<<<<< HEAD
    public function allUser(){
=======
    public function allUser(Request $request){
>>>>>>> origin/push
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
<<<<<<< HEAD
=======
        // $data=[
        //     'data'=>$request
        // ];
        // return response()->json($data);
>>>>>>> origin/push
        $user = Pengguna::where('USERNAME', $request->USERNAME)->first();
        if($user !== null){
            $respon = [
                'msg' => 'created failed Username unavailable',
                'error' => 'Username'
            ];
            return response()->json($respon);
        }
        $request->validate([
            'USERNAME' => 'required',
            'NAMA' => 'required',
            'PASSWORD' => 'required',
            'ROLE' => 'required',
<<<<<<< HEAD
            
=======
>>>>>>> origin/push
        ]);
        $data=[
            'USERNAME' => $request->USERNAME,
            'PASSWORD' => Hash::make($request->PASSWORD),
            'NAMA' => $request->NAMA,
            'ROLE' => $request->ROLE,
<<<<<<< HEAD
            'JABATAN' => $request->JABATAN,
            'NIP' => $request->NIP
=======
>>>>>>> origin/push
        ];
        
        $user = Pengguna::create($data);

        if(!$user){
            $respon = [
                'msg' => 'created failed',
                'error' => 'createdPengguna'
            ];
            return response()->json($respon);
        }
        $data2 =[
            'username' =>$request->USERNAME,
            'password' => Hash::make($request->PASSWORD),
            'name' => $request->NAMA,
            'id'=> $user->id
        ];
        $user2 = User::create($data2);
        if(!$user2){
            $respon = [
                'msg' => 'created failed',
                'error' => 'createdUser'
            ];
            return response()->json($respon);
        }
        $result=[
            'msg' => 'succes',
            'pengguna'=> $user,
            'user' => $user2

        ];
        return response()->json($result);

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
<<<<<<< HEAD
            'JABATAN' => $request->JABATAN,
            'NIP' => $request->NIP
=======
>>>>>>> origin/push
        ]);
        if($user){
            $pengguna = User::where('id',$request->id)
        ->update([
            'USERNAME' => $request->USERNAME,
            'PASSWORD' => Hash::make($request->PASSWORD),
        ]);
            if(!$pengguna){
                $respon = [
                    'msg' => 'update failed',
                    'error' => 'updateUser'
                ];
                return response()->json($respon);
            }
        }
        if(!$user){
            $respon = [
                'msg' => 'update failed',
                'error' => 'updatePengguna'
            ];
            return response()->json($respon);
        }
        return response()->json($user);
    }

    public function deleteUser($id){
        $userAuth = User::where('id',$id);
        $username = $userAuth->get();
        if($username == 'admin')
        {
            $respon = [
                'msg' => 'delete failed admin cant to be delete',
                'error' => 'deletePengguna'
            ];
            return response()->json($userAuth,400);
        }
        $userAuth->delete();
        $user = Pengguna::where('ID_PENGGUNA', $id);
        $user->delete();
        if(!$user){
            $respon = [
                'msg' => 'delete failed',
                'error' => 'deletePengguna'
            ];
            return response()->json($respon);
        
        }
        if($id==null){
            $respon = [
                'msg' => 'delete failed',
                'error' => 'deletePengguna'
            ];
            return response()->json($respon);
<<<<<<< HEAD
        }      
        return response()->json($user);
    }
=======
        }
        
        return response()->json($user);

    }
    
    // public function deleteUser($id){
    //     // $user = Pengguna::where('ID_PENGGUNA', $request->id)->first();
    //     if($id == null){
    //         $respon = [
    //             'msg' => 'failed',
    //             'error' => 'Pengguna',
    //             'request' => $id
    //         ];
    //         return response()->json($respon);
    //     }else{
            
    //             $respon = [
    //                 'msg' => 'succes',
    //                 'error' => 'null',
    //                 'request' => $id
    //             ];
    //             return response()->json($respon);
    //     }
    // }

>>>>>>> origin/push
}
