<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticlesController;

Route::get('/', [PageController::Class, 'homePage'])->name('homepage');;
Route::get('/chi-siamo', [PageController::Class, 'chiSiamo'])->name('chi-siamo');;
Route::get('/servizi', [PageController::Class, 'servizi'])->name('servizi');;
Route::get('/articoli', [ArticlesController::Class, 'index'])->name('articles');
Route::get('/articolo/{id}', [ArticlesController::Class, 'show'])->name('articolo');
