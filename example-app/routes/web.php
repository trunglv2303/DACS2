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
    Route::post('/login', [UserController::class,'login'])->name('login');
    Route::get('/logout', [UserController::class,'logout'])->name('logout');
});
Route::get('/view', [UserController::class,'viewhome'])->name('viewhome');
Route::get('/view-Collection', [UserController::class,'viewcollection'])->name('viewcollection');

