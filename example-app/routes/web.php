<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('/account')->group(function(){
    Route::get('/login', [UserController::class,'register'])->name('register');
    Route::post('/getinfo', [UserController::class,'getinfo'])->name('getinfo');
    Route::post('/loginnow',[UserController::class,'login'])->name('loginnow');
    Route::get('/trangchu', [UserController::class,'trangchu'])->name('trangchu');
});
Route::get('/view', [UserController::class,'viewhome'])->name('viewhome');
Route::get('/view-Collection', [UserController::class,'viewcollection'])->name('viewcollection');
Route::get('/thanhtoan', [UserController::class,'thanhtoan'])->name('thanhtoan');
Route::get('/sanphammoi',[UserController::class,'sanphammoi'])->name('sanphammoi');
Route::get('/sanphamdam',[UserController::class,'sanphamdam'])->name('sanphamdam');
Route::get('/sanpham',[UserController::class,'sanpham'])->name('sanpham');
Route::get('/sale',[UserController::class,'sale'])->name('sale');
Route::get('/giohang',[UserController::class,'giohang'])->name('giohang');
Route::get('/bosuutap',[UserController::class,'bosuutap'])->name('bosuutap');
Route::get('/accout',[UserController::class,'accout'])->name('accout');
