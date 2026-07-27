<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/blog/dummy-post', 'pages.blog-post')->name('blog.post');
Route::view('/experience', 'pages.experience')->name('experience');
Route::view('/skills', 'pages.skills')->name('skills');
Route::view('/projects', 'pages.projects')->name('projects');
