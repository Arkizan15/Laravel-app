<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

 

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => "Arkan Rifqy"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts'=>Post::all()]);
});
route::get('/post/{slug}', function($slug){
    $posts = Post::all();
    $post = Arr::first($posts, function ($post) use($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});