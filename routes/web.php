<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorizationController;

Route::view('/', 'welcome');

Route::get('/news', [
    HomeController::class, 'index'
])->name('news');

Route::get('/news/show/{id}', [
    HomeController::class, 'show'
])->where('id', '\d+')->name('news.show');

Route::get('/category', [
    CategoryController::class, 'category'
])->name('category');

Route::get('/category/{id}', [
    CategoryController::class, 'news'
])->name('category');

Route::get('/authorization', [
    AuthorizationController::class, 'authorization'
])->name('authorization');


?>

