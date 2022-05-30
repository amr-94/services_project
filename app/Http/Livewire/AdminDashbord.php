<?php

namespace App\Http\Livewire;





use Livewire\Component;

class AdminDashbord extends Component
{
    public function render()
    {
        return view('livewire.admin-dashbord')->layout('layouts.base');
    }
}
