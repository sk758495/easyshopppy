<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;






// Category route here
Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', [UserController::class, 'show_product'])->name('user.show_product')->middleware(['auth', 'verified']);

Route::get('/user/show_detail/{id}', [UserController::class, 'show_detail'])->name('user.show_detail')->middleware(['auth', 'verified']);

Route::get('/add_cart/{id}', [UserController::class, 'add_cart'])->name('user.add_cart')->middleware(['auth', 'verified']);

Route::get('/cart', [UserController::class, 'index'])->name('cart.index');


Route::get('/product/{id}', [UserController::class, 'show_product'])->name('product.show');
