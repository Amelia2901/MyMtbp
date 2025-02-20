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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'required|image|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('organization', 'public');

        OrganizationalChart::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $photoPath,
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit(OrganizationalChart $request, $id = null)
    {
        $item = OrganizationalChart::findOrFail($id);
        return view('StrukturOrganisasi.organizational_chart_form', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = OrganizationalChart::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);
    
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('organization', 'public');
            $item->photo = $photoPath;
        }
    
        $item->name = $request->name;
        $item->position = $request->position;
        $item->save();
    
        return redirect()->route('organizational_chart.index')->with('success', 'Data berhasil diperbarui!');
    }
    
}