<?php

namespace App\Http\Controllers;

use App\Models\BannerAbout;
use App\Http\Requests\StoreBannerAboutRequest;
use App\Http\Requests\UpdateBannerAboutRequest;

class BannerAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = BannerAbout::first();
        return view('StrukturOrganisasi.index', compact('banner'));
    }

    //  * Show the form for creating a new resource.
    //  */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerAboutRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('banner_photo')) {
            $filePath = $request->file('banner_photo')->store('uploads/banner_photos', 'public');
        }

        $banner = BannerAbout::first();

        if ($banner) {
            $banner->update([
                'banner_photo' => $filePath ?? $banner->banner_photo,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        } else {
            BannerAbout::create([
                'banner_photo' => $filePath,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        }

        return redirect()->route('banner-about.index')->with('success', 'Banner berhasil ditambahkan atau diperbarui!');
    }



    /**
     * Display the specified resource.
     */
    public function show(BannerAbout $bannerAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerAbout $bannerAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerAboutRequest $request, BannerAbout $bannerAbout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerAbout $bannerAbout)
    {
        //
    }
}

