<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::resource('articles',ArticleController::class);

Route::get('/account',[PublicController::class, 'account'])->name('auth.account');

Route::get('/show/article/{article}',[ArticleController::class, 'show'])->name('article.show');