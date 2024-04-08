<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);


Route::get('register', [RegisterController::class, 'create'])->middleware('guest')->name('user.register.view');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest')->name('user.register.store');


Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login.view');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest')->name('login.store');


Route::post('logout', [SessionsController::class, 'logout'])->middleware('auth')->name('logout');


Route::post('admin/posts/{id}', [AdminPostController::class, 'destroy'])->middleware('can:admin')->name('posts.destroy');
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show','destroy');
});


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::put('password', [PasswordController::class, 'update'])->name('password.update');
Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');









