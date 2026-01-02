<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $primaryKey = 'Transaction_ID';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'Machine_ID',
        'Amount',
        'Duration',
        'Time'
    ];

    public function machine() {
        return $this->belongsTo(Machine::class, 'Machine_ID', 'Machine_ID');
    }

    public static function getTransactions() {
        return self::with('machine.user')
            ->whereHas('machine', function($query) {
                $query->where('User_ID', Auth::id());
            });
    }

    public static function storeTransaction($request) {
        self::create([
            'Machine_ID' => $request->Machine_ID,
            'Amount' => $request->Amount,
            'Duration' => $request->Duration,
            'Time' => now(),
        ]);
    }
}
