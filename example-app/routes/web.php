<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::prefix('/account')->group(function () {
    Route::get('/login', [UserController::class, 'register'])->name('register');
    Route::post('/getinfo', [UserController::class, 'getinfo'])->name('getinfo');
    Route::post('/loginnow', [UserController::class, 'login'])->name('loginnow');
    Route::post('/profile', [UserController::class, 'viewprofile'])->name('viewprofile');
});

Route::prefix('/')->group(function () {
    Route::get('/', [UserController::class, 'viewhome'])->name('viewhome');
    Route::prefix('/collections')->group(function () {
        Route::get('/product', [UserController::class, 'viewproduct'])->name('viewproduct');
        Route::get('/producnew', [UserController::class, 'viewproductnew'])->name('viewproductnew');
        Route::get('/product_desciption', [UserController::class, 'Product_Description'])->name('viewproduct_desciption');
        Route::get('/online', [UserController::class, 'viewproduct'])->name('viewproductonline');
        Route::get('/bosutap', [UserController::class, 'viewcollection'])->name('viewcollection');
        Route::get('/productsale', [UserController::class, 'viewproductsale'])->name('viewproductsale');

    });
    Route::get('/pay', [UserController::class, 'viewpay'])->name('viewpay');
    Route::get('/cart', [UserController::class, 'viewcart'])->name('viewcart');

}); 
Route::get('/admin',[AdminController::class,'index'])->name('index');
Route::prefix('/product')->group(function(){
    Route::get('/add',[ProductController::class,'create']);
    Route::get('/list',[ProductController::class,'list'])->name('list');
    Route::post('/set', [ProductController::class, 'setproduct'])->name('setproduct');
    Route::get('/edit/{id}',[ProductController::class,'store']);
    Route::post('/edit/{id}',[ProductController::class,'edit']);
});
Route::prefix('/menu')->group(function(){
    Route::get('/add',[MenuController::class,'create']);
    Route::get('/list',[MenuController::class,'list']);
});
