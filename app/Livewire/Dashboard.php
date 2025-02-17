<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;

class Dashboard extends Component
{
    public function index(Request $request)
    {
        return view('livewire.dashboard');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function login(Request $request)
    {
        $Username = $request->Username;
        $Password = $request->Password;
        // echo $Username;
    }
}
