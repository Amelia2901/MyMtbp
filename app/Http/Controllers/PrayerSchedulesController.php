<?php

namespace App\Http\Controllers;

use App\Models\prayer_schedules;
use App\Http\Requests\Storeprayer_schedulesRequest;
use App\Http\Requests\Updateprayer_schedulesRequest;
use App\Models\prayer_times;


class PrayerSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = prayer_times::all();
        return view('dashboard.shalat_tables', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shalat_add');
    }

   
    public function store(Storeprayer_schedulesRequest $request)
    {
        $request->validate([
            'shalat_name' => 'required',
            'shalat_time' => 'required',
        ]);

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
    public function edit(prayer_times $request, $id = null)
    {
        $shalat = prayer_times::findOrFail($id);
        return view('dashboard.shalat_edit', compact('shalat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateprayer_schedulesRequest $request, $id)
    {
        $request->validate([
            'subuh' => 'required',
            'dzuhur' => 'required',
            'ashar' => 'required',
            'maghrib' => 'required',
            'isya' => 'required',
        ]);

        // Update data berdasarkan ID
        $shalat = prayer_times::findOrFail($id);
        $subuh = $request->subuh;
        $dzuhur = $request->dzuhur;
        $ashar = $request->ashar;
        $maghrib = $request->maghrib;
        $isya = $request->isya;
        $shalat->update([
            'subuh' => $subuh . " (WIB)",
            'dzuhur' => $dzuhur . " (WIB)",
            'ashar' => $ashar . " (WIB)",
            'maghrib' =>$maghrib . " (WIB)",
            'isya' =>$isya . " (WIB)",
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