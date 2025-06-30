<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/coming_soon', [FrontController::class, 'comingSoon'])->name('coming_soon');

Route::get('/contact', [FrontController::class, 'contact'])->name('contact');