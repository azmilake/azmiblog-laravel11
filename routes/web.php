<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/azmi', function () {
    return view('home', [
        'name' => 'Muhammad Azmi'
    ]);
});
