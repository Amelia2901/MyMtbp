<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriInfaq;

class CategoriInfaqController extends Controller
{
    public function index()
    {
        $kategori = CategoriInfaq::first();
        return view('infaq.categori_infaq', compact('kategori'));
    }

    public function edit()
    {
        $kategori = CategoriInfaq::first();
        return view('infaq.categori_infaq', compact('kategori'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'kategori_1' => 'required',
            'deskripsi_1' => 'required',
            'kategori_2' => 'required',
            'deskripsi_2' => 'required',
            'kategori_3' => 'required',
            'deskripsi_3' => 'required',
            'kategori_4' => 'required',
            'deskripsi_4' => 'required',
        ]);

        $kategori = CategoriInfaq::first();

        if ($kategori) {
            $kategori->update([
                'kategori_1' => $data['kategori_1'],
                'deskripsi_1' => $data['deskripsi_1'],
                'kategori_2' => $data['kategori_2'],
                'deskripsi_2' => $data['deskripsi_2'],
                'kategori_3' => $data['kategori_3'],
                'deskripsi_3' => $data['deskripsi_3'],
                'kategori_4' => $data['kategori_4'],
                'deskripsi_4' => $data['deskripsi_4'],
            ]);
        } else {
            CategoriInfaq::create([
                'kategori_1' => $data['kategori_1'],
                'deskripsi_1' => $data['deskripsi_1'],
                'kategori_2' => $data['kategori_2'],
                'deskripsi_2' => $data['deskripsi_2'],
                'kategori_3' => $data['kategori_3'],
                'deskripsi_3' => $data['deskripsi_3'],
                'kategori_4' => $data['kategori_4'],
                'deskripsi_4' => $data['deskripsi_4'],
            ]);
        }
        return redirect()->route('CategoriInfaq.index')->with('success', 'Visi Misi berhasil ditambahkan atau diperbarui!');
    }

    public function update(Request $request)
    {
        $request->validate([
            'kategori_1' => $data['kategori_1'],
                'deskripsi_1' => $data['deskripsi_1'],
                'kategori_2' => $data['kategori_2'],
                'deskripsi_2' => $data['deskripsi_2'],
                'kategori_3' => $data['kategori_3'],
                'deskripsi_3' => $data['deskripsi_3'],
                'kategori_4' => $data['kategori_4'],
                'deskripsi_4' => $data['deskripsi_4'],
        ]);
        $kategori = CategoriInfaq::firstOrCreate([], [
            'kategori_1' => $request->kategori_1,
            'kategori_2' => $request->kategori_2,
            'kategori_3' => $request->kategori_3,
            'kategori_4' => $request->kategori_4,
            'deskripsi_1' => $request->deskripsi_1,
            'deskripsi_2' => $request->deskripsi_2,
            'deskripsi_3' => $request->deskripsi_3,
            'deskripsi_4' => $request->deskripsi_4,
        ]);
        $kategori->update([
            'kategori_1' => $request->kategori_1,
            'kategori_2' => $request->kategori_2,
            'kategori_3' => $request->kategori_3,
            'kategori_4' => $request->kategori_4,
            'deskripsi_1' => $request->deskripsi_1,
            'deskripsi_2' => $request->deskripsi_2,
            'deskripsi_3' => $request->deskripsi_3,
            'deskripsi_4' => $request->deskripsi_4,
        ]);
        return redirect()->back()->with('success', 'Visi Misi berhasil diperbarui!');
    }
}
