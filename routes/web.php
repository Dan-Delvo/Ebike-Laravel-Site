<?php

use App\Http\Controllers\Download;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/download', [Download::class, 'download']);

