<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatEmas extends Model
{
    use HasFactory;
    
    protected $table = 'zakat_emas'; // nama tabel di database

    protected $fillable = [
        'emas', 
        'perak',
        'deskripsi',
    ];

}
