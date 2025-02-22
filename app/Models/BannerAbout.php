<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerAbout extends Model
{
    use HasFactory;

    protected $table = 'banner_about'; 

    protected $fillable = [
        'banner_photo',
        'banner_title',
        'banner_description',
    ];
}
