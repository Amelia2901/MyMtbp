<?php

namespace App\Http\Controllers;

use App\Models\BannerDashboard;
use App\Http\Requests\StoreBannerDashboardRequest;
use App\Http\Requests\UpdateBannerDashboardRequest;

class BannerDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = BannerDashboard::first();
        return view('dashboard.index', compact('banner'));
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
    public function store(StoreBannerDashboardRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('banner_photo')) {
            $filePath = $request->file('banner_photo')->store('uploads/banner_photos', 'public');
        }

        $banner = BannerDashboard::first();

        if ($banner) {
            $banner->update([
                'banner_photo' => $filePath ?? $banner->banner_photo,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        } else {
            BannerDashboard::create([
                'banner_photo' => $filePath,
                'banner_title' => $data['banner_title'],
                'banner_description' => $data['banner_description'],
            ]);
        }

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan atau diperbarui!');
    }


    /**
     * Display the specified resource.
     */
    public function show(BannerDashboard $bannerDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerDashboard $bannerDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerDashboardRequest $request, BannerDashboard $bannerDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerDashboard $bannerDashboard)
    {
        //
    }
}
