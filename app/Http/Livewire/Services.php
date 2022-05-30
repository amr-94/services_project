<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        $catagories = Service::all();

        return view('livewire.services', ['catagories' => $catagories])->layout('layouts.base');
    }
}
