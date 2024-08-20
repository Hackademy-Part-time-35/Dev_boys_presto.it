<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::resource('articles',ArticleController::class);
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/account',[PublicController::class, 'account'])->name('auth.account');

Route::get('/category',[PublicController::class, 'categoryArticles'])->name('category.category');

Route::get('revisor/index',[RevisorController::class, 'index'])->name('revisor.index');
