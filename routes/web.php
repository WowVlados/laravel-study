<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/contact', [MainController::class, 'contact']);

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);
