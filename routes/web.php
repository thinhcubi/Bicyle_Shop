<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cart',[\App\Http\Controllers\CartController::class,'index'])->name('shop.cart');


Route::prefix('/admin')->group(function (){
    Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/product/list',[\App\Http\Controllers\ProductController::class,'index'])->name('product.list');
    Route::get('/product/crete',[\App\Http\Controllers\ProductController::class,'create'])->name('product.create');
    Route::post('/product/create',[\App\Http\Controllers\ProductController::class,'store'])->name('product.store');
    Route::get('{id}/product/delete',[\App\Http\Controllers\ProductController::class,'delete'])->name('product.delete');
    Route::get('{id}/product/edit',[\App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
    Route::post('product/edit',[\App\Http\Controllers\ProductController::class,'update'])->name('product.update');
    Route::get('{id}/product/detail',[\App\Http\Controllers\ProductController::class,'detail'])->name('product.detail');
    Route::post('product/search',[\App\Http\Controllers\ProductController::class,'search'])->name('product.search');
    Route::post('/product/destroy',[\App\Http\Controllers\ProductController::class,'destroy'])->name('product.destroy');
});

   Route::prefix('/shop')->group(function (){
       Route::get('/home',[\App\Http\Controllers\ShopController::class,'index'])->name('shop.home');
   });
