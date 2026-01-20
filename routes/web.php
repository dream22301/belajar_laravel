<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

Route::get('/about', function () {
    return view('about');
    })->name('about');
    
Route::get('/form', function () {
    return view('form');
    })->name('form');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/form', [FormController::class, 'kasih'])->name('form.submit');