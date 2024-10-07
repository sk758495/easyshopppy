<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;






Route::prefix('admin')-> middleware('guest:admin')->group(function () {


    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AdminLoginController::class, 'create'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'store']);

 //   Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

   //  Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

   //  Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {

  //  Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');

 //    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

   //  Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');

  //   Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

  //   Route::put('password', [PasswordController::class, 'update'])->name('password.update');

  //admin.dashboard

  Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

    Route::post('logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');

    Route::get('category', [AdminLoginController::class, 'category'])->name('admin.category');


});
// Category route here
Route::post('admin/add_category', [AdminLoginController::class, 'add_category'])->middleware('auth:admin');

Route::get('admin/edit_category/{id}', [AdminLoginController::class, 'edit_category'])->middleware('auth:admin');

Route::post('admin/update_category/{id}', [AdminLoginController::class, 'update_category'])->middleware('auth:admin');

Route::get('admin/delete_category/{id}', [AdminLoginController::class, 'delete_category'])->middleware('auth:admin');

// Products route here
Route::get('admin/view_products', [AdminLoginController::class, 'view_products'])->middleware('auth:admin');

Route::get('admin/add_products', [AdminLoginController::class, 'add_products'])->middleware('auth:admin');

Route::post('admin/upload_products', [AdminLoginController::class, 'upload_products'])->middleware('auth:admin');

//show_products_edit is show and locate it of which product want to add by their id
Route::get('admin/show_products_edit', [AdminLoginController::class, 'show_products_edit'])->middleware('auth:admin');

Route::get('admin/update_product/{id}', [AdminLoginController::class, 'update_product'])->middleware('auth:admin');

Route::put('admin/update/{id}', [AdminLoginController::class, 'update'])->middleware('auth:admin'); // Change to PUT

Route::get('admin/delete_product/{id}', [AdminLoginController::class, 'delete_product'])->middleware('auth:admin');

// Brand route here

Route::get('admin/brands', [AdminLoginController::class, 'brands'])->name('admin.brand');

Route::post('admin/add_brands', [AdminLoginController::class, 'add_brands'])->middleware('auth:admin');

Route::get('admin/edit_brand/{id}', [AdminLoginController::class, 'edit_brand'])->middleware('auth:admin');

Route::post('admin/update_brand/{id}', [AdminLoginController::class, 'update_brand'])->middleware('auth:admin');

Route::get('admin/delete_brand/{id}', [AdminLoginController::class, 'delete_brand'])->middleware('auth:admin');
