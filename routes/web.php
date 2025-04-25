<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/index', function () {
    return view('index');
})->name('index');