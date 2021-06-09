<?php

namespace App\Http\Livewire\Globals;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class Languagepicker extends Component
{    
    public function render()
    {
        return view('livewire.globals.languagepicker');
    }

    public function setlocale($locale, $redirect){
        Session::put('locale', $locale);
        return redirect()->route($redirect);
    }
}