<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'name' => 'Muhammad Azmi',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'New Article Title',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptates iste odio repellendus. Modi porro
        cum optio totam aliquid provident vel autem vitae iste temporibus. Magnam asperiores a veniam itaque enim
        harum molestias neque id quam. Perspiciatis nam exercitationem eveniet?',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'mazmi9999@gmail.com',
        'phone' => '0987 0986 0888',
    ]);
});
