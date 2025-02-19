<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_mosques extends Model
{
    //
    use HasFactory;

    protected $table = 'contact_mosques';
    protected $primaryKey = 'contact_id'; 

    protected $fillable = [
        'youtube_channel',
        'url_youtube',
        'address_mosque',
    ];
}