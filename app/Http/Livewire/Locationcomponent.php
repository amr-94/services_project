<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Locationcomponent extends Component
{
    protected $listeners =['refreshcomponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.locationcomponent');
    }
}
