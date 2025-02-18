<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bannerinfaq extends Model
{
    /** @use HasFactory<\Database\Factories\BannerinfaqFactory> */
    use HasFactory;

    protected $table = 'banner_infaqs';

    protected $fillable = [
        'banner_photo',
        'banner_title',
        'banner_description',
    ];
}
