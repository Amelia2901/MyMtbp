<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Requests\storeActivitiesRequest;
use App\Http\Requests\StoreOrganizationalChartRequest;
use App\Http\Requests\UpdateOrganizationalChartRequest;
use App\Models\OrganizationalChart;

class OrganizationalChartController extends Controller
{
    //
    public function index(){
        $organizational_chart = OrganizationalChart::all();
        return view('StrukturOrganisasi.organizational_chart', compact('organizational_chart'));
    }

    public function create(){
        return view('StrukturOrganisasi.organizational_chart_form');
    }

    public function store(StoreOrganizationalChartRequest $request){
        
        $data = $request->validated();
        // echo $data; 
        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('uploads/organizationStructures_photos', 'public');
        }

        OrganizationalChart::create([
            'photo'=> $filePath,
            'position'=> $data['position'],
            'name' => $data['name'],
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Susunan Organisasi berhasil ditambahkan!');
    }

    public function edit(OrganizationalChart $request, $id = null)
    {
        $item = OrganizationalChart::findOrFail($id);
        return view('StrukturOrganisasi.organizational_chart_form', compact('item'));
    }

    public function update(UpdateOrganizationalChartRequest $request, $id)
    {
        $request->validate([
            'photo' => 'required',
            'position' => 'required',
            'name' => 'required',
        ]);

        // Update data berdasarkan ID
        $data = OrganizationalChart::findOrFail($id);
        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('uploads/organizationStructures_photos', 'public');
        }
        $data->update([
            'photo' => $filePath,
            'position' => $request->position,
            'name' => $request->name,
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Susunan Organisasi berhasil diperbarui');
    }
}