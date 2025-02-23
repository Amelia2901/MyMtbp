<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationPositions extends Model
{
    use HasFactory;

    protected $table = 'OrganizationPositions';

    protected $fillable = [
        'position',
    ];
}