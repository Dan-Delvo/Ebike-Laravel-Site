<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    /** @use HasFactory<\Database\Factories\MachineFactory> */
    use HasFactory;

    protected $primaryKey = 'Machine_ID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'User_ID',
        'Machine_Name'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'User_ID', 'id');
    }


}
