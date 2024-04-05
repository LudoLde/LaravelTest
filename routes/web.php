<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/article')->group(function () {
    Route::get('/',[ArticleController::class, 'add'])->name('add');

    Route::get('/show',[ArticleController::class, 'show'])->name('show');

    Route::get('/update',[ArticleController::class, 'update'])->name('update');

});