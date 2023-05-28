<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Sleep;
use Illuminate\Support\Facades\Auth;



class TestController extends Controller
{
   
    public function index(Request $request){
       

        $password = request('key', 'fdfsd');
    for($i= 0; $i < 5; $i++){
        // Sleep::for(10)->seconds();
        print_r($i++);
    }
        dump($password);
        // dd($password);
        
        if(!empty($request->file) ){
            // dd($request);
            $files= $request->file('file');
            $file = $request->file('file')->getClientOriginalName();
            $path = publiC_path('storage/hii');
            $extension = $files->getClientOriginalExtension();
            // dd($extension);
            // dd(Request()->file,$file);
            // dd($path."/".$file);
          
            if(File::exists($path."/"."abdvc".$file)){
                @unlink($path."/"."abdvc".$file);
            }
            $request->file('file')->move($path,$file);
        }
        return view('welcome');
    }
}
