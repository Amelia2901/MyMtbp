<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactMosquesController extends Controller
{
    public function index()
    {
        //mengambil data dari data kontak masjid 
        $contact_mosques = DB::table('contact_mosques')->get();

        //mengirim data contak ke views index 
        return view('contact_mosque.index', ['contact_mosques' => $contact_mosques]);
    }
}
