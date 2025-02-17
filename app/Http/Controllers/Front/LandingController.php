<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\BannerDashboard;

class LandingController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'description' => 'Selamat datang di website kami',
            'navbar' => Navbar::orderBy('order', 'asc')->get(),
            'banner' => BannerDashboard::first()
        );
        return view('index', compact('data'));
    }
}
