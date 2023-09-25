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

