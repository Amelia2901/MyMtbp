<?php 

namespace App\Http\Controllers;

use App\Models\BannerZakat;
use App\Http\Requests\StoreBannerZakatRequest;
use App\Http\Requests\UpdateBannerZakatRequest;

class BannerZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = BannerZakat::first();
        return view('Zakat.banner_zakat', compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerZakatRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('banner_photo')) {
            $filePath = $request->file('banner_photo')->store('uploads/banner_photos', 'public');
        }

        $banner = BannerZakat::first();


        if ($banner) {
            $banner->update([
                'banner_photo' => $filePath ?? $banner->banner_photo,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        } else {
            BannerZakat::create([
                'banner_photo' => $filePath,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        }

        return redirect()->route('banner-zakat.index')->with('success', 'Banner berhasil ditambahkan atau diperbarui!');
    }
}
