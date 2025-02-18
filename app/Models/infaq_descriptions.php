<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infaq_descriptions extends Model
{
    //
    use HasFactory;

    protected $table = 'infaq_descriptions';

    protected $fillable = [
        'description_1',
        'description_2',
    ];
}