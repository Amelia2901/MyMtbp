<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerZakat extends Model
{
    /** @use HasFactory<\Database\Factories\BannerZakatFactory> */
    use HasFactory;

    protected $table = 'banner_zakat';

    protected $fillable = [
        'banner_photo',
        'banner_title',
        'banner_description',
    ];
}
