<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/second', function () {
//     return view('second');
// });

Route::view('/second', 'second');

Route::get('/home', function () {
    return view('home');
});
