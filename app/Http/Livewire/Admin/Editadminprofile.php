<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Editadminprofile extends Component
{
    use WithFileUploads;
    public $user_id;
    public $image;
    public $address;
    public $newimage;
    public $phone;

    public function mount()
    {
        $admin = User::where('id', Auth::user()->id)->first();
        $this->user_id = $admin->user_id;
        $this->image = $admin->image;
        $this->phone = $admin->phone;
        $this->address = $admin->address;

    }

    public function updateprofile()
    {
        $admin = User::where('id', Auth::user()->id)->first();
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('admin', $imagename);
            $admin->image = $imagename;
        }
        $admin->address = $this->address;
        $admin->phone = $this->phone;
        $admin->save();
        session()->flash('message', 'profile has been updated');
    }

    public function render()
    {
        return view('livewire.admin.editadminprofile')->layout('layouts.base');
    }
}
