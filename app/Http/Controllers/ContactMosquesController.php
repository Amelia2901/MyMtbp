<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\contact_mosques;
use App\Http\Requests\updateContactRequest;

class ContactMosquesController extends Controller
{
    public function index()
    {
        $contact_mosques = DB::table('contact_mosques')->get();

        return view('dashboard.contact', compact('contact_mosques'));
    }

    public function edit(contact_mosques $request, $contact_id = null){
        $item = contact_mosques::findOrFail($contact_id);
        return view('dashboard.contact_form', compact('item'));
    }

    public function update(updateContactRequest $request, $id)
    {
        $request->validate([
            'youtube_channel' => 'required',
            'url_youtube' => 'required',
            'address_mosque' => 'required',
        ]);

        // Update data berdasarkan ID
        $data = contact_mosques::findOrFail($id);
        $data->update([
            'youtube_channel' => $request->youtube_channel,
            'url_youtube' => $request->url_youtube,
            'address_mosque' => $request->address_mosque,
        ]);

        return redirect()->route('contact.index')->with('success', 'Jadwal Shalat berhasil diperbarui');
    }
}