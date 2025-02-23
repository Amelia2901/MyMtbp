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
        $item = null; 
        return view('dashboard.activities_form', compact('item'));
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
        $activities = activities::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('activityPhoto')) {
            // Hapus foto lama jika ada
            if ($activities->ActivityPhoto && $activities->ActivityPhoto !== 'default.jpg') {
                Storage::disk('public')->delete($activities->ActivityPhoto);
            }

            // Simpan foto baru
            $photoPath = $request->file('activityPhoto')->store('uploads/activities', 'public');
        }

        // echo $data;

        // echo $data['main_activity'];
        if ($data['main_activity'] == 'on' ) {
            // echo 'hai';
            $all_activity = activities::all();
            $all_activity->each(function ($activity) {
                $activity->update(['main_activity' => 0]);
            });
        }

        $activities->update([
            'ActivityPhoto' => $photoPath ?? $activities->ActivityPhoto,
            'ActivityName' => $data['activityName'],
            'ActivityDescription' => $data['activityDescription'],
            'ActivityDate' => $data['activityDate'],
            'ActivityTime' => $data['activityTime'],
            'ActivityTime2' => $data['activityTime2'],
            'ActivityPlace' => $data['activityPlace'],
            'ActivityPerformers' => $data['activityPerformers'],
            'main_activity' => $data['main_activity'] == 'on' ? 1 : 0,
        ]);
        return redirect()->route('kegiatan.index')->with('success', 'Data Kegiatan berhasil diperbarui');
    }

    public function toggle($id)
    {
        $activities = Activities::findOrFail($id);
        $activities->is_active = !$activities->is_active;
        $activities->save();

        return redirect()->back()->with('success', 'Status kegiatan berhasil diperbarui!');
    }

}