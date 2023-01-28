<?php

use Illuminate\Support\Facades\Route;

Route::prefix("client")->as("account.")->group(function () {
    Route::middleware("account.redirect")->group(function () {
        Route::get('/login', [App\Http\Controllers\AuthController::class, "showLoginForm"])->name("login");
        Route::get('/register', [App\Http\Controllers\AuthController::class, "showRegisterForm"])->name("register");
    });
    
    Route::post('/login', [App\Http\Controllers\AuthController::class, "login"])->name("login");
    Route::post('/register', [App\Http\Controllers\AuthController::class, "register"])->name("register");
    Route::post('/logout', [App\Http\Controllers\AuthController::class, "logout"])->name("logout");
});
