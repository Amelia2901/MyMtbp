<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\BannerDashboard;
use App\Models\prayer_times;
use Carbon\Carbon;
use App\Models\contact_mosques;
use App\Models\contact_message;
use App\Models\BannerAbout;
use App\Models\Vision;
use App\Models\OrganizationalChart;
use App\Models\Bagan;
use App\Models\Bannerinfaq;
use App\Models\payment_method;
use App\Models\CategoriInfaq;
use App\Models\infaq_descriptions;
use App\Models\activities;
use App\Models\BannerZakat;
use App\Models\ZakatFitrah;
use App\Models\ZakatPenghasilan;
use App\Models\ZakatEmas;
use App\Models\ZakatTernakPerdagangan;


class LandingController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        $today = Carbon::now()->translatedFormat('l, d/m/Y');
        // echo $today;

        $data = array(
            'title' => 'Home',
            'description' => 'Selamat datang di website kami',
            'navbar' => Navbar::orderBy('order', 'asc')->get(),
            'banner' => BannerDashboard::first(),
            'shalat' => prayer_times::where('Tanggal', $today)->first(),
            'contact' => contact_mosques::first(),
            'main_activity' => activities::where('is_active', 1)->where('main_activity', 1)->first(),
            'activities' => activities::where('is_active', 1)->where('main_activity', 0)->get()
        );
        return view('index', compact('data'));
    }

    public function kirimpesan(Request $request){
        $name = $request->Name;
        $email = $request->Email;
        $telp = $request->Telp;
        $isi = $request->Isi;

        contact_message::create([
            'name' => $name,
            'email' => $email,
            'telp' => $telp,
            'isi' => $isi,
        ]);

        return redirect()->route('landing.index')->with('success', 'Pesan berhasil dikirim.');
    }


    public function struktur(){
        $data = array(
            'title' => 'Home',
            'description' => 'Selamat datang di website kami',
            'navbar' => Navbar::orderBy('order', 'asc')->get(),
            'banner' => BannerAbout::first(),
            'VisiMisi' => Vision::first(),
            'Bagan' =>  Bagan::first(),
            'struktur' => OrganizationalChart::all(),
        );
        return view('strukturOrganisasi', compact('data'));
    }

    public function infaq(){
        $data = array(
            'title' => 'Home',
            'description' => 'Selamat datang di website kami',
            'navbar' => Navbar::orderBy('order', 'asc')->get(),
            'banner' => Bannerinfaq::first(),
            'payment' => payment_method::first(),
            'description' => infaq_descriptions::first(),
            'category' => CategoriInfaq::first()
        );
        return view('infaq', compact('data'));
    }

    public function zakat(){
        $data = array(
            'title' => 'Home',
            'description' => 'Selamat datang di website kami',
            'navbar' => Navbar::orderBy('order', 'asc')->get(),
            'banner' => BannerZakat::first(),
            'fitrah' => ZakatFitrah::first(),
            'penghasilan' => ZakatPenghasilan::first(),
            'emas' => ZakatEmas::first(),
            'ternak' => ZakatTernakPerdagangan::first()
        );
        return view('zakat', compact('data'));
    }
}