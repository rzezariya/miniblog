<?php
namespace routes\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\dashbord;
Route::middleware('web')->group(function () {

Route::get('/admin',[dashbord::class,'index']);

});



