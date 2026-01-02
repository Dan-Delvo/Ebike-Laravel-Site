<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TransactionController;
use App\Models\Machine;
use Illuminate\Support\Facades\Mail;

Route::post('/send-email', [EmailController::class, 'sendEmail']);
Route::post('/store-transaction', [TransactionController::class, 'store']);

Route::get('/machine/{id}/status', function ($id) {
    $machine = Machine::find($id);

    if (!$machine) {
        return response()->json(['status' => 'Error', 'message' => 'Machine not found'], 404);
    }

    return response()->json([
        'id' => $machine->Machine_ID,
        'status' => $machine->Status // Returns "Active" or "Inactive"
    ]);
});

Route::get('/test-mail-config', function() {
    return response()->json([
        'mailer' => config('mail.default'),
        'host' => config('mail.mailers.smtp.host'),
        'port' => config('mail.mailers.smtp.port'),
        'username' => config('mail.mailers.smtp.username'),
        'from' => config('mail.from.address'),
    ]);
});
