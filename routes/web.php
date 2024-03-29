<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ShowPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainPageController::class, 'index'])->name('main');

Route::get('/show/{id}', [ShowPageController::class, 'index'])->name('show');

Route::prefix('admPanel')->group(
    function() {
        Route::get('/', [AdminPanelController::class, 'index'])->name('admPanel');
        Route::get('/delete/{tables}', [AdminPanelController::class, 'deletedView'])->name('deletedPanel');

        Route::get('/update/{tables}', [AdminPanelController::class, 'updateView'])->name('updatePanel');

        Route::delete('/{id}/news', [AdminPanelController::class, 'deletedNews'])->name('deleteNews');
        Route::delete('/{id}/category', [AdminPanelController::class, 'deletedCategory'])->name('deleteCategory');
        Route::delete('/{id}/comments', [AdminPanelController::class, 'deletedComments'])->name('deleteComments');
    }
);

Route::prefix('comments')->group(
    function() {
        Route::get('/', [CommentController::class, 'index'])->name('comments');
        Route::post('/create', [CommentController::class, 'createComment'])->name('createComment');
    }
);