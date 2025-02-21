<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZakatTernakPerdagangan;

class ZakatTernakPerdaganganController extends Controller
{
    public function index()
    {
        $data = ZakatTernakPerdagangan::first();
        return view('Zakat.zakat_ternak', compact('data'));
    }

    public function index2()
    {
        $data = ZakatTernakPerdagangan::first();
        return view('Zakat.zakat_perdagangan', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */

     public function store(Request $request)
    {
        $data = $request->validate([
            'deskripsi1' => 'required',
        ]);


        $zakat_ternak_perdagangans = ZakatTernakPerdagangan::first();


        if($zakat_ternak_perdagangans){
            $zakat_ternak_perdagangans->update([
                'deskripsi1' => $data['deskripsi1'],
                'deskripsi2' => $zakat_ternak_perdagangans->deskripsi2,
            ]);
        }else{
            ZakatTernakPerdagangan::create([
                'deskripsi1' => $data['deskripsi1'],
                'deskripsi2' => '',
            ]);
        }
       
        return redirect()->route('ZakatTernakPerdagangan.index')->with('success', 'Zakat Ternak berhasil diupdate!');
    }

    public function store2(Request $request)
    {
        $data = $request->validate([
            'deskripsi2' => 'required',
        ]);


        $zakat_ternak_perdagangans = ZakatTernakPerdagangan::first();


        if($zakat_ternak_perdagangans){
            $zakat_ternak_perdagangans->update([
                'deskripsi2' => $data['deskripsi2'],
                'deskripsi1' => $zakat_ternak_perdagangans->deskripsi1,
            ]);
        }else{
            ZakatTernakPerdagangan::create([
                'deskripsi2' => $data['deskripsi2'],
                'deskripsi1' => '',
            ]);
        }
       
        return redirect()->route('ZakatTernakPerdagangan.index2')->with('success', 'Zakat Perdagangan berhasil diupdate!');
    }

}