<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationalChart extends Model
{
    use HasFactory;

    protected $table = 'organizational_charts';

    protected $fillable = [
        'name',
        'position',
        'photo',
    ];
}
