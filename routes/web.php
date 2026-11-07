<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/blog', [PostController::class, 'index']);

Route::get('/', function () {
    return view('home', );
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
