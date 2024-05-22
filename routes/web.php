<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppControler;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::middleware('auth.admin')->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
Route::get('/my-account',[UserController::class,'index'])->name('user.index')->middleware('auth');

Route::get('/',[AppControler::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}' ,[ShopController::class,'productDetails'])->name('shop.product.details');

Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store',[CartController::class,'addToCart'])->name('cart.store');
Route::put('/cart/update',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');


