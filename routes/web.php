<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/blog', 'blog')->name('blog');
Route::view('/blog/dummy-post', 'blog-post')->name('blog.post');
