<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    //
    public function index(){
        $response =[
            'msg' => 'success',
            'file' => 'null'

        ];
        return response()->json($response,200) ;
    }
    public function setFile(Request $request){
        $surat = $request->myFile;  
        //get request file
        $nama_file = $surat->getClientOriginalName();
        $Documet   = app('firebase.firestore')->database()->collection('Document')->document($nama_file);  
        $firebase_storage_path = 'Document/';  
        $name     = $Documet->id();  
        $localfolder = public_path('firebase-temp-uploads') .'/';  
        $extension = $surat->getClientOriginalExtension();  
        $file      = $request->namefile. '.' . $extension;  
        if ($surat->move($localfolder, $file)) {  
            $uploadedfile = fopen($localfolder.$file, 'r');  
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);  
            //will remove from local laravel folder  
            unlink($localfolder . $file);  
           
            $expiresAt = new \DateTime('tomorrow');  
            $resource = 'Document/'. $file;
            $imageReference = app('firebase.storage')->getBucket()->object($resource);
            // if($imageReference->exists()){
                $image = $imageReference->signedUrl($expiresAt);  
                return response()->json($image,200);
                   
            // }
        } 
        

    }
    public function getFile(Request $request){
        $expiresAt = new \DateTime('tomorrow');  
        $resource = 'Document/'. $request->namafile. '.pdf';
        $imageReference = app('firebase.storage')->getBucket()->object($resource);  

        if($imageReference->exists()){
            $image = $imageReference->signedUrl($expiresAt);  
        }  
         $localfolder = 'data_files.pdf';  
        if($imageReference->downloadToFile($localfolder)){
            $response =[
                'msg' => 'success',
                'file' => 'null',
                'url' => $image
            ];
        }
       
        return response()->json($response,200);
    }
    public function deleteFile(Request $request){
        $resource = 'Document/'. $request->namafile. '.pdf';
        $imageDeleted = app('firebase.storage')->getBucket()->object($resource)->delete();  
        $response =[
            'msg' => 'success',
            'file' => 'null',
            'url' => $imageDeleted

        ];
        return response()->json($imageDeleted,200);

    }
    public function donwloadFile(Request $request){
        $myFile = public_path("data_files.pdf");


    	return response()->download($myFile)->deleteFileAfterSend(true);
    }

}
