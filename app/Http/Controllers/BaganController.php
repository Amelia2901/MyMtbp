<?php

namespace App\Http\Controllers;

use App\Models\Bagan;
use App\Http\Requests\StoreBaganRequest;
use App\Http\Requests\UpdateBaganRequest;

class BaganController extends Controller
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
    public function store(StoreBagan $request)
    {
        $data = $request->validated(); 

        if ($request->hasFile('bagan_photo')) {
            $filePath = $request->file('bagan_photo')->store('uploads/bagan_photos', 'public');
        }

        Bagan::create([
            'bagan_photo' => $filePath,
            'bagan_title' => $data['bagan_title'],
            'bagan_description' => $data['bagan_description'],
        ]);

        return redirect()->back()->with('success', 'Bagan berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Bagan $bagan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bagan $bagan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBagan $request, Bagan $bagan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bagan $bagan)
    {
        //
    }
}

