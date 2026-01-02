<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Mail;

Route::post('/send-email', [EmailController::class, 'sendEmail']);
Route::post('/store-transaction', [TransactionController::class, 'store']);

Route::get('/test-mail-config', function() {
    return response()->json([
        'mailer' => config('mail.default'),
        'host' => config('mail.mailers.smtp.host'),
        'port' => config('mail.mailers.smtp.port'),
        'username' => config('mail.mailers.smtp.username'),
        'from' => config('mail.from.address'),
    ]);
});
