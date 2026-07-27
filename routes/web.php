<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/blog', 'blog')->name('blog');
Route::view('/blog/dummy-post', 'blog-post')->name('blog.post');
Route::view('/experience', 'experience')->name('experience');
Route::view('/skills', 'skills')->name('skills');
Route::view('/projects', 'projects')->name('projects');
