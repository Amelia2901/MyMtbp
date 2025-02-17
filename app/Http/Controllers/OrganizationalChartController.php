<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganizationalChart;

class OrganizationalChartController extends Controller
{
    public function index()
    {
        $structures = OrganizationalChart::all();
        return view('StrukturOrganisasi.organizational_chart', compact('structures'));
    }

    public function create()
    {
        return view('StrukturOrganisasi.organizational_chart_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('organizational_photos', 'public');

        $data = $request->only(['name', 'position']);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        OrganizationalChart::create($data);
        // return redirect()->route('organizational_chart.index')->with('success', 'Struktur organisasi berhasil ditambahkan!');
        // return redirect()->route('organizational_chart.index')->with('success', 'Data berhasil disimpan!');
        return back()->with('success', 'Data berhasil disimpan!');


    }

    public function edit($id)
    {
        $item = OrganizationalChart::findOrFail($id);
        return view('StrukturOrganisasi.organizational_chart_form', compact('item'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = OrganizationalChart::findOrFail($id);
        $updateData = $request->only(['name', 'position']);

        if ($request->hasFile('photo')) {
            $updateData['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $data->update($updateData);
        // return redirect()->route('organizational_chart.index')->with('success', 'Struktur organisasi berhasil diperbarui!');
        return redirect()->route('organizational_chart.index')->with('success', 'Data berhasil disimpan!');
    }

    public function destroy($id)
    {
        $data = OrganizationalChart::findOrFail($id);
        $data->delete();
        return redirect()->route('organizational_chart.index')->with('success', 'Struktur organisasi berhasil dihapus!');
    }
}
