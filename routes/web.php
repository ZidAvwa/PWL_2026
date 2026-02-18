<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'my NIM 244107020083';
});

Route::get('/user/{name?}', function ($name='Zid') {
return 'My name is '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post to '.$postId.' Comments to: '.$commentId;
});

Route::get('/articles/{articleId}', function ($articleId) {
    return "Article Page with ID " . $articleId;
});