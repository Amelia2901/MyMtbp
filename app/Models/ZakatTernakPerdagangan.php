<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatTernakPerdagangan extends Model
{
    use HasFactory;
    
    protected $table = 'zakat_ternak_perdagangans'; // nama tabel di database

    protected $fillable = [
        'deskripsi1',
        'deskripsi2',
    ];
}
