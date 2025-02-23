<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Requests\storeActivitiesRequest;
use App\Http\Requests\StoreOrganizationalChartRequest;
use App\Http\Requests\UpdateOrganizationalChartRequest;
use App\Models\OrganizationalChart;
use App\Models\OrganizationPositions;

class OrganizationalChartController extends Controller
{
    //
    public function index(){
        $organizational_chart = OrganizationalChart::leftJoin('organizationpositions', 'organizational_charts.position', '=', 'organizationpositions.id')
        ->select('organizational_charts.*', 'organizationpositions.position as jabatannya')->get();
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
        $position = OrganizationPositions::all();
        return view('StrukturOrganisasi.organizational_chart_form', compact('item', 'position'));
    }


    public function update(UpdateOrganizationalChartRequest $request, $id)
    {
        $organizational_chart = OrganizationalChart::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('organization', 'public');
        }

        $organizational_chart->update([
            'photo' => $photoPath ?? $organizational_chart->photo,
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

    public function position(){
$data = OrganizationPositions::all();

        return view('StrukturOrganisasi.positions', compact('data'));
    }

    public function addPosition(){
        return view('StrukturOrganisasi.position_form');
    }

    public function editPosition($id){
        $item = OrganizationPositions::findOrFail($id);
        return view('StrukturOrganisasi.position_form', compact('item'));
    }

    public function createPosition(Request $request){
        $data = $request->validate([
            'position' => 'required',
        ]);

        OrganizationPositions::create([
            'position' => $data['position'],
        ]);

        return redirect()->route('organizational_chart.position')->with('success', 'Data berhasil diperbarui!');
    }

    public function updatePosition(Request $request, $id){
        $position = OrganizationPositions::findOrFail($id);
        $data = $request->validate([
            'position' => 'required',
        ]);

        $position->update([
            'position' => $data['position'],
        ]);

        return redirect()->route('organizational_chart.position')->with('success', 'Data berhasil diperbarui!');
    }
}