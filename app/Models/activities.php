<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    //
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'ActivityName',
        'ActivityDescription',
    ];
}