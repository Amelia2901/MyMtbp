<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZakatPenghasilan;

class ZakatPenghasilanController extends Controller
{
    public function index()
    {
        $zakat_penghasilans = ZakatPenghasilan ::first();
        return view('Zakat.zakat_penghasilan', compact('zakat_penghasilans'));
    }

    public function edit()
    {
        $zakat_penghasilans = ZakatPenghasilan::first();
        return view('Zakat.zakat_penghasilan', compact('zakat_penghasilans'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'deskripsi' => 'required',
        ]);

        $zakat_penghasilans = ZakatPenghasilan::first();

        if ($zakat_penghasilans) {
            $zakat_penghasilans->update([
                'deskripsi' => $data['deskripsi'],
            ]);
        } else {
            ZakatPenghasilan::create([
                'deskripsi' => $data['deskripsi'],
            ]);
        }
        return redirect()->route('ZakatPenghasilan.index')->with('success', 'Zakat Penghasilan berhasil ditambahkan atau diperbarui!');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'deskripsi' => 'required',
        ]);

        $zakat_penghasilans = ZakatPenghasilan::first();
        if ($zakat_penghasilans) {
            $zakat_penghasilans->update($data);
        } else {
            ZakatPenghasilan::create($data);
        }

        return redirect()->back()->with('success', 'Zakat Penghasilan berhasil diperbarui!');
    }

    public function storeOrUpdate(Request $request)
    {
        $data = $request->validate([
            'deskripsi' => 'required',
        ]);
    
        $zakat_penghasilans = ZakatPenghasilan::first();
    
        if ($zakat_penghasilans) {
            $zakat_penghasilans->update($data);
        } else {
            ZakatPenghasilan::create($data);
        }
    
        return redirect()->route('ZakatPenghasilan.index')->with('success', 'Zakat Penghasilan berhasil diperbarui!');
    }
}
