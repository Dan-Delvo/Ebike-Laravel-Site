<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Machine extends Model
{
    /** @use HasFactory<\Database\Factories\MachineFactory> */
    use HasFactory;

    protected $primaryKey = 'Machine_ID';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'User_ID',
        'Machine_Name',
        'Status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'User_ID', 'id');
    }

    public static function getMachines() {
        return self::with('user')
                    ->whereHas('user', function($query){
                        $query->where('User_ID', Auth::id());
                    });
    }


}
