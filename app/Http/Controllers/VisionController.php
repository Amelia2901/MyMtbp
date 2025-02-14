<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vision;

class VisionController extends Controller
{
    public function index()
    {
        // $banner = BannerAbout::all();
        return view('StrukturOrganisasi.visi');
    }

        public function edit()
        {
            $vision= Vision::first(); // Ambil data pertama
            return view('vision.edit', compact('vision'));
        }
    
        public function update(Request $request)
        {
            $data = $request->validate([
                'vision' => 'required|string|max:255',
                'mission' => 'required|string|max:255',
            ]);
    
            Vision::updateOrCreate([], $data);
    
            return redirect()->route('vision.edit')->with('success', 'Visi & Misi berhasil diperbarui!');
        }
    }
 