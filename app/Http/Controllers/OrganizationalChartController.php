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

        OrganizationalChart::create([
            'photo'=> $data['photo'],
            'position'=> $data['position'],
            'name' => $data['name'],
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Banner berhasil ditambahkan!');
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
        $data->update([
            'photo' => $request->photo,
            'position' => $request->position,
            'name' => $request->name,
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Jadwal Shalat berhasil diperbarui');
    }
}