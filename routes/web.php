<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Homepage',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'title' => 'post title 1',
                'author' => 'Azmi Muhammad',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
            ],
            [
                'title' => 'post title 2',
                'author' => 'Anton Bee',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
            ],
        ],
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});
