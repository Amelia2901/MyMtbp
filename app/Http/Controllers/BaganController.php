<?php

namespace App\Http\Controllers;

use App\Models\Bagan;
use App\Http\Requests\StoreBaganRequest;
use App\Http\Requests\UpdateBaganRequest;

class BaganController extends Controller
{
    public function index()
    { 
        $bagan = Bagan::first();
        return view('StrukturOrganisasi.bagan', compact('bagan'));
    }

    public function store(StoreBaganRequest $request)
    {
        $data = $request->validated(); 

        if ($request->hasFile('bagan_photo')) {
            $filePath = $request->file('bagan_photo')->store('uploads/bagan_photos', 'public');
        }

        $bagan = Bagan::first();

        if ($bagan) {
            $bagan->update([
                'bagan_photo' => $filePath ?? null,
                'bagan_title' => $data['bagan_title'],
                'bagan_description' => $data['bagan_description'],
            ]);
        } else {
            Bagan::create([
            'bagan_photo' => $filePath ?? null,
            'bagan_title' => $data['bagan_title'],
            'bagan_description' => $data['bagan_description'],
            ]);
        }


        return redirect()->back()->with('success', 'Bagan berhasil ditambahkan!');
    }

    public function show(Bagan $bagan)
    {
        //
    }

    public function edit(Bagan $bagan)
    {
        //
    }

    public function update(UpdateBaganRequest $request, Bagan $bagan)
    {
        //
    }

    public function destroy(Bagan $bagan)
    {
        //
    }
}