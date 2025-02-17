<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vision;


class VisionController extends Controller
{
    public function index()
    {
        $vision = Vision::first(); // Ambil data pertama
        return view('StrukturOrganisasi.visi', compact('vision'));
    }

    public function edit()
    {
        $vision = Vision::first(); // Ambil data pertama
        return view('StrukturOrganisasi.visi', compact('vision'));
    }



    public function update(Request $request)
{
    $request->validate([
        'vision' => 'required',
        'mission' => 'required',
    ]);

    // Ambil data pertama atau buat baru jika tidak ada
    $vision = Vision::firstOrCreate([], [
        'vision' => $request->vision,
        'mission' => $request->mission,
    ]);

    // Update jika data sudah ada
    $vision->update([
        'vision' => $request->vision,
        'mission' => $request->mission,
    ]);

    // return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    return redirect()->back()->with('success', 'Data berhasil diperbarui!');

}
    
}