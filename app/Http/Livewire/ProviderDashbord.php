<?php

namespace App\Http\Livewire;

// namespace App\Http\Middleware;



use Livewire\Component;

class ProviderDashbord extends Component
{
    public function render()
    {
        return view('livewire.provider-dashbord')->layout('layouts.base');
    }
}
