<?php

namespace App\Http\Controllers;

use App\Models\BannerInfaq;
use App\Http\Requests\StoreBannerInfaqRequest;
use App\Http\Requests\UpdateBannerInfaqRequest;

class BannerInfaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = BannerInfaq::first();
        return view('infaq.banner_infaq', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerInfaqRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('banner_photo')) {
            $filePath = $request->file('banner_photo')->store('uploads/banner_photos', 'public');
        }

        $banner = BannerInfaq::first();

        if ($banner) {
            $banner->update([
                'banner_photo' => $filePath ?? $banner->banner_photo,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        } else {
            BannerInfaq::create([
                'banner_photo' => $filePath,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        }

        return redirect()->route('banner-infaq.index')->with('success', 'Banner berhasil ditambahkan atau diperbarui!');
    }


    /**
     * Display the specified resource.
     */
    public function show(BannerInfaq $bannerInfaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerInfaq $bannerInfaq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerInfaqRequest $request, BannerInfaq $bannerInfaq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerInfaq $bannerInfaq)
    {
        //
    }
}

