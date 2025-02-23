<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    //
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'ActivityName',
        'ActivityPhoto',
        'ActivityDescription',
        'ActivityPerformers',
        'ActivityDate',
        'ActivityTime',
        'ActivityTime2',
        'ActivityPlace',
        'is_active',
        'main_activity'
    ];
}