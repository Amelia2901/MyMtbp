<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Requests\storeActivitiesRequest;
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

        activities::create([
            'ActivityName' => $data['activityName'],
            'ActivityDescription'=> $data['activityDescription'],
            'ActivityDate'=> $data['activityDate'],
            'ActivityTime'=> $data['activityTime'],
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Banner berhasil ditambahkan!');
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
            'activityDescription' => 'required',
            'activityDate' => 'required',
            'activityTime' => 'required',
        ]);

        // Update data berdasarkan ID
        $data = activities::findOrFail($id);
        $data->update([
            'ActivityName' => $request->activityName,
            'ActivityDescription' => $request->activityDescription,
            'ActivityDate' => $request->activityDate,
            'ActivityTime' => $request->activityTime,
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Jadwal Shalat berhasil diperbarui');
    }
}