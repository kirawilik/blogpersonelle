<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [ArticleController::class, 'dashboard'])
        ->name('articles.dashboard');

 
    Route::get('/articles', [ArticleController::class, 'index'])
        ->name('articles.index');

    Route::get('/articles/{article}', [ArticleController::class, 'show'])
        ->name('articles.show')
        ->whereNumber('article'); 

    Route::get('/articles/create', [ArticleController::class, 'create'])
        ->name('articles.create');

    Route::post('/articles', [ArticleController::class, 'store'])
        ->name('articles.store');

    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])
        ->name('articles.edit')
        ->whereNumber('article'); 

    Route::put('/articles/{article}', [ArticleController::class, 'update'])
        ->name('articles.update')
        ->whereNumber('article');

    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])
        ->name('articles.destroy')
        ->whereNumber('article'); 
});