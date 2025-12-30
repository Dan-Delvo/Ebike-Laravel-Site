<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $primaryKey = 'Transaction_ID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'Machine_ID',
        'Amount',
        'Duration',
        'Time'
    ];

    public function machine() {
        return $this->belongsTo(Machine::class, 'Machine_ID', 'Machine_ID');
    }
}
