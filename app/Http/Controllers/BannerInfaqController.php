<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerInfaqController extends Controller
{
    public function index()
    {
        return view('infaq.banner_infaq');
    }
}
