<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prayer_schedules extends Model
{
    /** @use HasFactory<\Database\Factories\PrayerSchedulesFactory> */
    use HasFactory;

    protected $table = 'prayer_schedules';

    protected $fillable = [
        'shalat_name',
        'shalat_time',
    ];
}
