<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.layout.login');
    }
    public function store(Request $request){
        $data = User::get();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        return redirect()->back()->with('success','successfully Login');
    }
    public function logout(){
        // dd('dsfds');
        Auth::logout();
        return redirect()->route('login.index')->with('success',"admin log out successfully");
    }
}
