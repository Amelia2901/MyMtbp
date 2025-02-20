<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatFitrah extends Model
{
    use HasFactory;
    
    protected $table = 'zakat_fitrahs'; // nama tabel di database

    protected $fillable = [
        'zakat', 
        'deskripsi',
    ];

}
