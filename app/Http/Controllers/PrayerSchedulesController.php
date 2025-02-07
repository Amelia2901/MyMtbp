<?php

namespace App\Http\Controllers;

use App\Models\prayer_schedules;
use App\Http\Requests\Storeprayer_schedulesRequest;
use App\Http\Requests\Updateprayer_schedulesRequest;

class PrayerSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = prayer_schedules::all();
        return view('dashboard.shalat_tables', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shalat_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeprayer_schedulesRequest $request)
    {
        $request->validate([
            'shalat_name' => 'required',
            'shalat_time' => 'required',
        ]);

        // Menyimpan data baru
        prayer_schedules::create([
            'shalat_name' => $request->shalat_name,
            'shalat_time' => $request->shalat_time,
        ]);

        return redirect()->route('shalat.index')->with('success', 'Jadwal Shalat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(prayer_schedules $prayer_schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prayer_schedules $request, $id = null)
    {
        $shalat = prayer_schedules::findOrFail($id);
        return view('dashboard.shalat_edit', compact('shalat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateprayer_schedulesRequest $request, $id)
    {
        $request->validate([
            'shalat_name' => 'required',
            'shalat_time' => 'required',
        ]);

        // Update data berdasarkan ID
        $shalat = prayer_schedules::findOrFail($id);
        $shalat->update([
            'shalat_name' => $request->shalat_name,
            'shalat_time' => $request->shalat_time,
        ]);

        return redirect()->route('shalat.index')->with('success', 'Jadwal Shalat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prayer_schedules $prayer_schedules)
    {
        //
    }
}
