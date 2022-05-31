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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.dashboard');
Route::get('konten', [App\Http\Controllers\HomeController::class, 'konten'])->name('konten');

Route::get('login', [App\Http\Controllers\MainloginController::class, 'index'])->name('login');
Route::get('logout', [App\Http\Controllers\MainloginController::class, 'logout'])->name('logout');
Route::post('login_action', [App\Http\Controllers\MainloginController::class, 'login_action'])->name('login_action');



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'index'])->name('dashboard');
    Route::get('/profile-overview', [App\Http\Controllers\AdminController::class,'profile_overview'])->name('profile-overview');
    Route::get('/profile-setting', [App\Http\Controllers\AdminController::class,'profile_setting'])->name('profile-setting');
    Route::get('/change-password', [App\Http\Controllers\AdminController::class,'change_pass'])->name('change-password');
    Route::post('/update-profil', [App\Http\Controllers\AdminController::class,'update_profile'])->name('update-profile');

    Route::get('/kategori', [App\Http\Controllers\AdminController::class,'kategori'])->name('kategori');

    Route::get('/content', [App\Http\Controllers\ContentController::class,'content'])->name('content');
    Route::get('/form-content', [App\Http\Controllers\ContentController::class,'form'])->name('form.content');
    Route::get('/konten-detail/{id}', [App\Http\Controllers\ContentController::class,'detail'])->name('konten.detail');

    Route::post('/post-konten', [App\Http\Controllers\ContentController::class,'postkonten'])->name('post.konten');

});

