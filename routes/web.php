<?php

use App\Http\Controllers\AuthorizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\main\MainController;

Route::get('/', [MainController::class, 'main']);

Route::get('/sign_in', [AuthorizationController::class, 'authorization']);

Route::prefix('news')->
group(function() {
    Route::get('/',[NewsController::class, 'index'])
    ->name('news');
    Route::get('/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');
    Route::get('/add', [NewsController::class, 'addNews'])
    ->name('addNews');
} 
    );

Route::prefix('category')
->group(function() {
    Route::get('/', [CategoryController::class, 'category'])
    ->name('category');
    Route::get('/{id}', [CategoryController::class, 'news'])
    ->name('category')
    ->where('id', '\d+');
});

?>

