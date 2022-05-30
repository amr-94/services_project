<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SproviderProfile extends Component
{
    public function render()
    {
        $Sprovider =ServiceProvider::where('user_id',Auth::user()->id)->first();
        return view('livewire.sprovider.sprovider-profile',['Sprovider'=> $Sprovider])->layout('layouts.base');
    }
}
