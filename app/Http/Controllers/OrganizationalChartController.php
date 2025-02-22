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

    public function store(StoreOrganizationalChartRequest $request)
    {
        $photoPath = $request->file('photo')->store('organization', 'public');

        OrganizationalChart::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $photoPath,
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = OrganizationalChart::findOrFail($id);
        return view('StrukturOrganisasi.organizational_chart_form', compact('item'));
    }


    public function update(UpdateOrganizationalChartRequest $request, $id)
    {
        $organizational_chart = OrganizationalChart::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('organization', 'public');
            $organizational_chart->photo = $photoPath;
        }

        $organizational_chart->update([
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('organizational_chart.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function toggle($id)
    {
        $organizational_chart = OrganizationalChart::findOrFail($id);
        $organizational_chart->is_active = !$organizational_chart->is_active;
        $organizational_chart->save();

        return redirect()->back()->with('success', 'Status Susunan DKM berhasil diperbarui!');
    }
}