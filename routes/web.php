<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::post('logout', [SessionsController::class, 'logout'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});

Route::get('/profile', [ProfileController::class, 'edit']);

Route::patch('/profile', [ProfileController::class, 'update']);

Route::delete('/profile', [ProfileController::class, 'destroy']);

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store']);

Route::put('password', [PasswordController::class, 'update']);

Route::delete('/profile', [ProfileController::class, 'destroy']);






