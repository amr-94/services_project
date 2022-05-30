<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Changelocation extends Component
{
    public $streetnumber;
    public $routes;
    public $city;
    public $state;
    public $country;
    public $zipcode;

    public function chagelocation()

    {
        session()->put('streetnumber',$this->streetnumber);
        session()->put('routes', $this->routes);
        session()->put('city', $this->city);
        session()->put('state', $this->state);
        session()->put('country', $this->country);
        session()->put('zipcode', $this->zipcode);
        session()->flash('message', 'location has been changed');

        $this ->emitTo('locationcomponent', 'refreshcomponent');
    }

    public function render()
    {
        return view('livewire.changelocation')->layout('layouts.base');
    }
}
