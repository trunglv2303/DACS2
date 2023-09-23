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
<<<<<<< HEAD
    Route::post('/login', [UserController::class,'login'])->name('login');
    Route::get('/logout', [UserController::class,'logout'])->name('logout');
=======
    Route::post('/loginnow',[UserController::class,'login'])->name('loginnow');
    Route::get('/trangchu', [UserController::class,'trangchu'])->name('trangchu');
>>>>>>> c1438910c7fd4c951c9cdfe1effe112b02146522
});
Route::get('/view', [UserController::class,'viewhome'])->name('viewhome');
Route::get('/view-Collection', [UserController::class,'viewcollection'])->name('viewcollection');

