<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZakatEmas;

class ZakatEmasController extends Controller
{
    public function index()
    {
        $zakat_emas = ZakatEmas ::first();
        return view('Zakat.zakat_emas', compact('zakat_emas'));
    }

    public function edit()
    {
        $zakat_emas = ZakatEmas::first();
        return view('Zakat.zakat_emas', compact('zakat_emas'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'emas' => 'required',
            'perak' => 'required',
            'deskripsi' => 'required',
        ]);

        $zakat_emas = ZakatEmas ::first();

        if ($zakat_emas) {
            $zakat_emas->update([
                'emas' => $data['emas'],
                'perak' => $data['perak'],
                'deskripsi' => $data['deskripsi'],
            ]);
        } else {
            ZakatEmas::create([
                'emas' => $data['emas'],
                'perak' => $data['perak'],
                'deskripsi' => $data['deskripsi'],
            ]);
        }
        return redirect()->route('ZakatEmas.index')->with('success', 'Zakat Emas dan Perak 
        berhasil ditambahkan atau diperbarui!');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'emas' => 'required',
            'perak' => 'required',
            'deskripsi' => 'required',
        ]);

        $zakat_emas = ZakatEmas::first();
        if ($zakat_emas) {
            $zakat_emas->update($data);
        } else {
            ZakatEmas::create($data);
        }

        return redirect()->back()->with('success', 'Zakat Emas dan Perak berhasil diperbarui!');
    }

    public function storeOrUpdate(Request $request)
    {
        $data = $request->validate([
            'emas' => 'required',
            'perak' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $zakat_emas = ZakatEmas::first();
    
        if ($zakat_emas) {
            $zakat_emas->update($data);
        } else {
            ZakatEmas::create($data);
        }
    
        return redirect()->route('ZakatEmas.index')->with('success', 'Zakat Emas dan Perak berhasil diperbarui!');
    }
}
