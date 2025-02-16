<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\Frontead\DashboardController;
use App\Http\Controllers\frontead\FronteadController;
use App\Http\Controllers\Frontead\ProfileController;
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


Route::get('/',[FronteadController::class, 'index']);


// auth admin login
Route::group(['middleware'=>'guest'], function(){
    Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');
});


Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('update', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.avatar.updated');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
