<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    //UPDATE PROFILE
    Route::get('profile',  [ProfileController::class, 'index'])->name('profile');
    Route::put('update', [ProfileController::class, 'updateprofile'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatepassword'])->name('profile.password.update');

    //SLIDER ROUTES
    Route::resource('slider', SliderController::class);
});
