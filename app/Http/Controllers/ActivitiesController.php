<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Requests\storeActivitiesRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\storeActivitiesRequest;
use App\Http\Requests\updateActivitiesRequest;
use App\Models\activities;

class ActivitiesController extends Controller
{
    //
    public function index(){
        $activities = activities::all();
        return view('dashboard.activities', compact('activities'));
    }

    public function create(){
        return view('dashboard.activities_form');
    }

    public function store(storeActivitiesRequest $request){
        
        $data = $request->validated(); 

        // activities::create([
        //     'ActivityName' => $data['activityName'],
        //     // 'ActivityPhoto' => $data['activityPhoto'],
        //     'ActivityDescription'=> $data['activityDescription'],
        //     'ActivityDate'=> $data['activityDate'],
        //     'ActivityTime'=> $data['activityTime'],
        //     'ActivityTime2'=> $data['activityTime2'],
        //     'ActivityPlace'=> $data['activityPlace'],
        //     'ActivityPerformers'=> $data['activityPerformers'],
        // ]);

        if ($request->hasFile('activityPhoto')) {
            $photoPath = $request->file('activityPhoto')->store('uploads/activities', 'public');
            $data['ActivityPhoto'] = $photoPath; // Menyimpan path gambar ke database
        }
    else {
        $data['ActivityPhoto'] = 'default.jpg'; // Atur default jika tidak ada gambar
    }
        
        activities::create($data);
        
        

        return redirect()->route('kegiatan.index')->with('success', 'Data Kegiatan berhasil ditambahkan!');
    }

    public function edit(activities $request, $id = null)
    {
        $item = activities::findOrFail($id);
        return view('dashboard.activities_form', compact('item'));
    }

    public function update(updateActivitiesRequest $request, $id)
    {
        $request->validate([
            'activityName' => 'required',
            'activityPhoto' => 'required',
            'activityDescription' => 'required',
            'activityPerformers' => 'required',
            'activityDate' => 'required',
            'activityTime' => 'required',
            'activityTime2' => 'required',
            'activityPlace' => 'required',
        ]);

        // Update data berdasarkan ID
        $data = activities::findOrFail($id);
            if ($request->hasFile('activityPhoto')) {
                // Hapus gambar lama jika ada
                if ($data->ActivityPhoto) {
                    Storage::disk('public')->delete($data->ActivityPhoto);
                }
            
                // Simpan gambar baru
                $photoPath = $request->file('activityPhoto')->store('uploads/activities', 'public');
                $data->ActivityPhoto = $photoPath;
            }
            
            $data->update([
                'ActivityName' => $request->activityName,
                'ActivityDescription' => $request->activityDescription,
                'ActivityPerformers' => $request->activityPerformers,
                'ActivityDate' => $request->activityDate,
                'ActivityTime' => $request->activityTime,
                'ActivityTime2' => $request->activityTime2,
                'ActivityPlace' => $request->activityPlace,
            ]);
            
            $data->save();

        return redirect()->route('kegiatan.index')->with('success', 'Data Kegiatan berhasil diperbarui');
    }
}