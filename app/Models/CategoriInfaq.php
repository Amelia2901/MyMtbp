<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriInfaq extends Model
{
    use HasFactory;
    
    protected $table = 'categori_infaqs'; // nama tabel di database

    protected $fillable = [
        'kategori_1', 'deskripsi_1', 
        'kategori_2', 'deskripsi_2', 
        'kategori_3', 'deskripsi_3', 
        'kategori_4', 'deskripsi_4'
    ];
    
}
