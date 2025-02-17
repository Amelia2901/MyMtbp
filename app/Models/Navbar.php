<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navbar extends Model
{
    use SoftDeletes;

    protected $table = 'navbar_menus';
    protected $fillable = ['name', 'url', 'parent_id', 'order'];
    public $timestamps = false;

    protected $dates = ['deleted_at'];
}
