<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Portfolio Page Route
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Contact Form Submit Route
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.send');
