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

Route::get('revisor/index',[RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('accept/{article}', [RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

Route::get('/revisor/request',[RevisorController::class, 'becomeRevisor'] )->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');