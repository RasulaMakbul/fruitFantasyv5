<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/addCategory', function () {
    return view('admin.addCategory');
});
