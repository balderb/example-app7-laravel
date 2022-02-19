<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/testing2', function () {
    return view('testing2');
});

Route::get('post', function () {
    return view('post', [
        'post' => '<h1>Hello world</h1>',
    ]);
});