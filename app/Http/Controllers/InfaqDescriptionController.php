<?php

namespace App\Http\Controllers;

use App\Models\infaq_descriptions;
use Illuminate\Http\Request;


class InfaqDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = infaq_descriptions::first();
        return view('infaq.deskripsi1', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'description_1' => 'required',
        ]);


        $description = infaq_descriptions::first();


        if($description){
            $description->update([
                'description_1' => $data['description_1'],
                'description_2' => $description->Description_2,
            ]);
        }else{
            infaq_descriptions::create([
                'description_1' => $data['description_1'],
                'description_2' => '',
            ]);
        }
       
        return redirect()->route('infaqDescription.index')->with('success', 'Deskripsi Infaq berhasil diupdate');
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