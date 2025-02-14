<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    use HasFactory;

    protected $table = 'vision_missions'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['vision', 'mission'];
}
