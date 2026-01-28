<?php

use App\Http\Controllers\AuthController;
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

Route::get('/auth', function() {
    return view('auth');
})->name('htua');

Route::post('/auth', [AuthController::class, 'auth_control'])->name('htua.submit');
