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
    public function index(){
        $activities = activities::all();
        return view('dashboard.activities', compact('activities'));
    }

    public function create(){
        return view('dashboard.activities_form');
    }

    public function store(storeActivitiesRequest $request)
    {
        // Buat instance baru untuk menyimpan data
        $data = new Activities();
        $data->ActivityName = $request->activityName;
        $data->ActivityDescription = $request->activityDescription;
        $data->ActivityPerformers = $request->activityPerformers;
        $data->ActivityDate = $request->activityDate;
        $data->ActivityTime = $request->activityTime;
        $data->ActivityTime2 = $request->activityTime2;
        $data->ActivityPlace = $request->activityPlace;

        // Cek jika ada file foto yang diupload
        if ($request->hasFile('activityPhoto')) {
            $photoPath = $request->file('activityPhoto')->store('uploads/activities', 'public');
            $data->ActivityPhoto = $photoPath;
        }

        $data->save();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = activities::findOrFail($id);
        return view('dashboard.activities_form', compact('item'));
    }
    
    public function update(updateActivitiesRequest $request, $id)
    {
        $data = $request->validated();
        $activity = activities::findOrFail($id);

        if ($request->hasFile('activityPhoto')) {
            // Hapus foto lama jika ada
            if ($activity->ActivityPhoto && $activity->ActivityPhoto !== 'default.jpg') {
                Storage::disk('public')->delete($activity->ActivityPhoto);
            }

            // Simpan foto baru
            $photoPath = $request->file('activityPhoto')->store('uploads/activities', 'public');
            $data['ActivityPhoto'] = $photoPath;
        }

        $activity->update($data);
        return redirect()->route('kegiatan.index')->with('success', 'Data Kegiatan berhasil diperbarui');
    }

    public function toggle($id)
    {
        $activities = Activities::findOrFail($id);
        $activities->is_active = !$activities->is_active; // Toggle status
        $activities->save();

        return redirect()->back()->with('success', 'Status kegiatan berhasil diperbarui!');
    }

}