<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerAbout;
use App\Http\Requests\StoreBannerAboutRequest;
use App\Http\Requests\UpdateBannerAboutRequest;

class BannerAboutController extends Controller
{
    public function index()
    {
        // $banner = BannerAbout::all();
        return view('StrukturOrganisasi.index');
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
    public function store(StoreBannerAboutRequest $request)
    {
        $data = $request->validated(); 

        if ($request->hasFile('banner_photo')) {
            $filePath = $request->file('banner_photo')->store('uploads/banner_photos', 'public');
        }

        BannerAbout::create([
            'banner_photo' => $filePath,
            'banner_title' => $data['banner_title'],
            'banner_description' => $data['banner_description'],
        ]);

        return redirect()->back()->with('success', 'Banner berhasil ditambahkan!');
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

