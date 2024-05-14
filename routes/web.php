<?php

use Illuminate\Support\Arr;
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
                'id' => 1,
                'title' => 'post title 1',
                'author' => 'Azmi Muhammad',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
            ],
            [
                'id' => 2,
                'title' => 'post title 2',
                'author' => 'Anton Bee',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
            ],
        ],
    ]);
});

Route::get('posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'post title 1',
            'author' => 'Azmi Muhammad',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
        ],
        [
            'id' => 2,
            'title' => 'post title 2',
            'author' => 'Anton Bee',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
        ],
    ];

    $post = Arr::first($posts, function($post) use ($id) { //fitur dari php 8 menggunakan use ($id) untuk menggunakan variabel di luar scope function, karena $id milik dari parent functionnya bukan local functionnya
        return $post['id'] == $id; 
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
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
