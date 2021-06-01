<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateUserModel;

class CreateUserController extends Controller
{
    public function __construct()
    {
        this->CreateUserController = new CreateUserController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = [
        //     'pengguna'=>this->CreateUserModel->allData(),
        // ];
        $data=CreateUserModel::all();
        return $data;
        // return view('KelolaPengguna',$data);
    }

    // public function userAction(){
    //     // $dataTables = new DataTables\DataTable();

    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new CreateUserModel;
        $data->name = $request->name;
        $data->username = $request->username;
        // $data->role = $request->role;
        $data->password = $request->password;
        $data->save();
        // $request->validate([
        //     'name' => 'required',
        //     'username' => 'required',
        //     'role' => 'required',
        //     'password' => 'required'
        // ]);
        // CreateUserModel::create($request->all());

        // return response('success',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CreateUserModel::find($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = CreateUserModel::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        // $data->role = $request->role;
        $data->password = $request->password;
        // $request->validate([
        //     'name' => 'required',
        //     'username' => 'required',
        //     'role' => 'required',
        //     'password' => 'required'
        // ]);
        // $id->update($request->all());

        // return response('update',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CreateUserModel::find($id);
        $data->delete();
        // $id->delete();
        // return response('',204);
    }

    public function createUserForm(Request $request){
        return view('view/KelolaPengguna');
    }

    public function UserForm(Request $request){
        //form validation
        $this->validate($request,[
            'name'=>'required',
            'username'=>'required',
            // 'role'=>'required',
            'password'=>'required'
        ]);
    }
}
