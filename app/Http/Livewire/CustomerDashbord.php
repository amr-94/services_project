<?php

namespace App\Http\Livewire;

// namespace App\Http\Middleware;



use Livewire\Component;

class CustomerDashbord extends Component
{
    public function render()
    {
        return view('livewire.customer-dashbord')->layout('layouts.base');
    }
}
