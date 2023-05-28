<?php

namespace App\Http\Controllers\admin;

// use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class dashbord extends BaseController
{
public function index(){
        return view('welcome');
    }
}


