<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activities;

class ActivitiesController extends Controller
{
    //
    public function index(){
        return view('dashboard.activities');
    }

    public function create(){
        return view('dashboard.activities_form');
    }

    public function store(){
        return view('dashboard.activities_form');
    }
}