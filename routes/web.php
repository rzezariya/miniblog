<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest','web'])->group(function(){
    Route::get('/sign', [RegisterController::class, 'index'])->name('sign.index');
    Route::post('/sign', [RegisterController::class, 'store'])->name('sign.store');
    Route::get('/loginsss', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});
Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::any('/', [TestController::class, 'index'])->name('index');
});