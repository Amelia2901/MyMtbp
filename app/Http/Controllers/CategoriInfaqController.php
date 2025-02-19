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
        return redirect()->route('CategoriInfaq.index')->with('success', 'Kategori Infaq berhasil ditambahkan atau diperbarui!');
    }

    public function update(Request $request)
    {
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
            $kategori->update($data);
        } else {
            CategoriInfaq::create($data);
        }

        return redirect()->back()->with('success', 'Kategori Infaq berhasil diperbarui!');
    }

    public function storeOrUpdate(Request $request)
    {
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
            $kategori->update($data);
        } else {
            CategoriInfaq::create($data);
        }
    
        return redirect()->route('CategoriInfaq.index')->with('success', 'Kategori Infaq berhasil diperbarui!');
    }
    

}
