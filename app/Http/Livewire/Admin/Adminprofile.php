<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Adminprofile extends Component
{
    public function render()
    {
        $Admin =User::where('id', Auth::user()->id)->first();

        return view('livewire.admin.adminprofile',['Admin'=> $Admin])->layout('layouts.base');
    }
}
