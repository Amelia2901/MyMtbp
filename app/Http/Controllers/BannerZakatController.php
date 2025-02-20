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

        // Jika ada file yang diupload, simpan dan dapatkan path-nya
        $filePath = $request->hasFile('banner_photo') 
            ? $request->file('banner_photo')->store('uploads/banner_photos', 'public') 
            : optional(BannerZakat::first())->banner_photo; // Gunakan gambar lama jika tidak ada file baru

        // Update atau buat baru jika tidak ada
        BannerZakat::updateOrCreate(
            [], // Tidak ada kondisi pencarian, karena hanya ada satu row
            [
                'banner_photo' => $filePath,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]
        );

        return redirect()->route('banner-zakat.index')->with('success', 'Banner berhasil ditambahkan atau diperbarui!');
    }
}
