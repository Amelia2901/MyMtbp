<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    //
    public function index(){
        $data = array(
            'message' => contact_message::whereDate('created_at', Carbon::today())->get(), 
            'user' => Auth::user(),
        );
        
        return view('dashboard.home', compact('data'));
    }

    public function pesan(){
        $data = array(
            'message' => contact_message::all(), 
            'user' => Auth::user(),
        );
        
        return view('dashboard.message', compact('data'));
    }
}