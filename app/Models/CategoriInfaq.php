<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriInfaq extends Model
{
    use HasFactory;
    
    protected $table = 'categori_infaqs'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['kategori1', 'deskripsi1', 'kategori2','deskripsi2', 'kategori3', 'deskripsi3', 'kategori4', 'deskripsi4'];
}
