<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, '__invoke'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.post');
Route::view('/experience', 'pages.experience')->name('experience');
Route::view('/skills', 'pages.skills')->name('skills');
Route::view('/projects', 'pages.projects')->name('projects');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'sendOtp']);
Route::get('/login/verify', [OtpController::class, 'showVerifyForm'])->name('admin.otp.verify');
Route::post('/login/verify', [OtpController::class, 'verifyOtp']);
Route::post('/login/resend', [OtpController::class, 'resendOtp'])->name('admin.otp.resend');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['web', 'auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});
