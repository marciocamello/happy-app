<?php

namespace App\Http\Livewire\App;

use Livewire\Component;

class MapMarker extends Component
{
    public function render()
    {
        return view('livewire.app.map-marker')
            ->layout('layouts.main')
            ->slot('main');
    }
}
