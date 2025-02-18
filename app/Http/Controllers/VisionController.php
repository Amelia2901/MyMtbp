<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vision;


class VisionController extends Controller
{
    public function index()
    {
        $vision = Vision::first();
        return view('StrukturOrganisasi.visi', compact('vision'));
    }

    public function edit()
    {
        $vision = Vision::first();
        return view('StrukturOrganisasi.visi', compact('vision'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]);

        $vision = Vision::first();

        if ($vision) {
            $vision->update([
                'vision' => $data['vision'],
                'mission' => $data['mission'],
            ]);
        } else {
            Vision::create([
                'vision' => $data['vision'],
                'mission' => $data['mission'],
            ]);
        }
        return redirect()->route('vision.index')->with('success', 'Visi Misi berhasil ditambahkan atau diperbarui!');
    }

    public function update(Request $request)
{
    $request->validate([
        'vision' => 'required',
        'mission' => 'required',
    ]);
    $vision = Vision::firstOrCreate([], [
        'vision' => $request->vision,
        'mission' => $request->mission,
    ]);
    $vision->update([
        'vision' => $request->vision,
        'mission' => $request->mission,
    ]);
    return redirect()->back()->with('success', 'Visi Misi berhasil diperbarui!');
}
}