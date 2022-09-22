<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
});



Route::get('/addCategory', [CategoryController::class, 'addCategory']);
Route::get('/categoryList', [CategoryController::class, 'categoryList']);
Route::get('/editCategory', [CategoryController::class, 'editCategory']);
Route::get('/viewCategory', [CategoryController::class, 'viewCategory']);
Route::get('/addProduct', [ProductController::class, 'addProduct']);
Route::get('/editProduct', [ProductController::class, 'editProduct']);
Route::get('/productList', [ProductController::class, 'productList']);
Route::get('/viewProduct', [ProductController::class, 'viewProduct']);
Route::get('/viewProductUser', [ProductController::class, 'viewProductUser']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/editUser', [UserController::class, 'editUser']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/userList', [UserController::class, 'userList']);
Route::get('/viewUser', [UserController::class, 'viewUser']);
