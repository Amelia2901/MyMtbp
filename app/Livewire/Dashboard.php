<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;

class Dashboard extends Component
{
    public function index(Request $request){
        if($request->session()->has('login')){
            return view('livewire.dashboard');
		}else{
            return view('dashboard.login');
		}
    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }

    public function login(Request $request){
        $Username = $request->Username;
        $Password = $request->Password;
        // echo $Username;
    }
}