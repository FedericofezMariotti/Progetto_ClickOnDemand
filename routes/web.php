<?php

use App\Livewire\Auth\AuthForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/articles/create', [ArticleController::class, 'createArticle'])->name('createArticle');
// rotta index articoli
Route::get('/articles/index', [ArticleController::class, 'indexArticle'])->name('indexArticle');
// rotta per i dettagli
Route::get('/articles/detail/{article}', [ArticleController::class, 'detailArticle'])->name('detailArticle');

//Rotta Parametrica per categoria
Route::get('/articles/category/{category}', [ArticleController::class, 'categoryArticle'])->name('categoryArticle');
// Rotta Parametrica per sottocategoria
Route::get('/articles/subcategory/{subcategory}', [ArticleController::class, 'subcategoryArticle'])->name('subcategoryArticle');

//Rotta Per Login e Register Livewire
Route::get('/auth', [PublicController::class, 'authForm'] )->name('auth.form');
// rotta per linguaggio
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');







// rotta revisore
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('indexRevisor');

//Rotta Accettazione Articolo 
Route::patch('/accepte/{article}', [RevisorController::class, 'accept'])->name('accept');

//Rotta Rifiuta Articolo
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

// rotta mail   
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// rotta make revisor
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->middleware('auth')->name('make.revisor');

//Rotta per ricerca articoli
Route::get('/search/article', [PublicController::class, 'searchArticle'])->name('article.search');


