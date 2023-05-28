<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class RegisterController extends Controller
{
    public function __construct(){
        if(!Auth::check()){
            return redirect()->route('index');
        }
    }
    public function index(){
        return  view('admin.layout.signup');
    }
    public function store(Request $request){

        $has = User::where('email',$request->email)->first();
        // dd($has);
        if($has == null){
            if($request->password === $request->co_password){
                $user = new User;
                $user->name = $request->name ; 
                $user->email = $request->email ;
                $user->password = bcrypt($request->password);
                $user->save();
                return redirect()->route('login.index');
            }else{
                return redirect()->back()->with('success','Password wrong');
            }
        }else{
            return redirect()->back()->with('success','somthing went wrong');
        }
    }
}
