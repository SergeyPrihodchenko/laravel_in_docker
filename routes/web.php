<?php

use App\Http\Controllers\AuthorizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\main\MainController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\OrderController;

Route::get('/', [MainController::class, 'main']);
Route::post('/', [MainController::class, 'addComment'])->name('addComment');

Route::get('/sign_in', [AuthorizationController::class, 'authorization']);

Route::prefix('news')->
group(function() {
    Route::get('/',[NewsController::class, 'index'])
    ->name('news');
    Route::get('/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('show');
    Route::get('/add', [NewsController::class, 'addNews'])
    ->name('addNews');
    Route::post('/add', [NewsController::class, 'store'])
    ->name('store');
    }  
);

Route::prefix('category')
->group(function() {
    Route::get('/', [CategoryController::class, 'category'])
    ->name('category');
    Route::get('/{id}', [CategoryController::class, 'news'])
    ->name('category.sort')
    ->where('id', '\d+');
});

Route::get('/testFile', [FileController::class, 'testFile']);

Route::prefix('order')
->group(
    function() 
    {
        Route::get('/', [OrderController::class, 'order'])->name('order');
        Route::post('/', [OrderController::class, 'createOrder'])->name('orderCreate');
    }
);
?>

