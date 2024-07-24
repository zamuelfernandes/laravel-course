<?php

use Illuminate\Support\Facades\Route;

// use \App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/second', function () {
//     return view('second');
// });

Route::view('/second', 'second');

// Route::view('home', 'home')->name('home');
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
// Route::get('posts/{postId}', [SomeController::class, 'some_method']);
// Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');