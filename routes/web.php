<?php

use Illuminate\Support\Facades\Route;

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
