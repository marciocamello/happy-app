<?php

namespace App\Http\Livewire\App;

use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        return view('livewire.app.landing')
            ->layout('layouts.main')
            ->slot('main');
    }
}
