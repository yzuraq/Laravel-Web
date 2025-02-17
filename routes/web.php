<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/add', function () {
    return view('tambah');
});

Route::get('/up', function () {
    return view('update');
});

Route::get('/delete', function () {
    return view('delete');
});
