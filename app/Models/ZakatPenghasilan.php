<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatPenghasilan extends Model
{
    use HasFactory;
    
    protected $table = 'zakat_penghasilans'; // nama tabel di database

    protected $fillable = [
        'deskripsi',
    ];
}
