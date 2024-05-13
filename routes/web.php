<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Homepage',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
       'title' => 'Contact'
    ]);
});

Route::get('/about', function () {
    return view('about', [
       'title' => 'About'
    ]);
});