<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Download;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;




Route::middleware(['web'])->group(function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/download', [Download::class, 'download']);

    Route::get('/', function () {
        return view('pages.landing.home_page');
    });

    Route::get('/login', function () {
        return view('pages.landing.home_login');
    });

});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/', [AdminController::class, 'dashboard']);
});


