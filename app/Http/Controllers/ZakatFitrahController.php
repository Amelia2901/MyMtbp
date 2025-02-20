<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZakatFitrah;

class ZakatFitrahController extends Controller
{
    public function index()
    {
        $zakat_fitrahs = Zakatfitrah ::first();
        return view('Zakat.zakat_fitrah', compact('zakat_fitrahs'));
    }

    public function edit()
    {
        $zakat_fitrahs = ZakatFitrah::first();
        return view('Zakat.zakat_fitrah', compact('zakat_fitrahs'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'zakat' => 'required',
            'deskripsi' => 'required',
        ]);

        $zakat_fitrahs = ZakatFitrah ::first();

        if ($zakat_fitrahs) {
            $zakat_fitrahs->update([
                'zakat' => $data['zakat'],
                'deskripsi' => $data['deskripsi'],
            ]);
        } else {
            ZakatFitrah::create([
                'zakat' => $data['zakat'],
                'deskripsi' => $data['deskripsi'],
            ]);
        }
        return redirect()->route('ZakatFitrah.index')->with('success', 'Zakat Fitrah berhasil ditambahkan atau diperbarui!');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'zakat' => 'required',
            'deskripsi' => 'required',
        ]);

        $zakat_fitrahs = ZakatFitrah::first();
        if ($zakat_fitrahs) {
            $zakat_fitrahs->update($data);
        } else {
            ZakatFitrah::create($data);
        }

        return redirect()->back()->with('success', 'Zakat fitrah berhasil diperbarui!');
    }

    public function storeOrUpdate(Request $request)
    {
        $data = $request->validate([
            'zakat' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $zakat_fitrahs = ZakatFitrah::first();
    
        if ($zakat_fitrahs) {
            $zakat_fitrahs->update($data);
        } else {
            ZakatFitrah::create($data);
        }
    
        return redirect()->route('ZakatFitrah.index')->with('success', 'Zakat Fitrah berhasil diperbarui!');
    }
}
