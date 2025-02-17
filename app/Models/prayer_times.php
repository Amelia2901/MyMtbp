<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prayer_times extends Model
{
    /** @use HasFactory<\Database\Factories\PrayerSchedulesFactory> */
    use HasFactory;

    protected $table = 'prayer_times';

    protected $fillable = [
        'tanggal',
        'imsak',
        'subuh',
        'syuruk',
        'dzuhur',
        'ashar',
        'maghrib',
        'isya',
    ];
}