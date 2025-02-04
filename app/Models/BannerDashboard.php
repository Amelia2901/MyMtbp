<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerDashboard extends Model
{
    /** @use HasFactory<\Database\Factories\BannerDashboardFactory> */
    use HasFactory;

    protected $table = 'banner_dashboard';

    protected $fillable = [
        'banner_photo',
        'banner_title',
        'banner_description',
    ];
}
