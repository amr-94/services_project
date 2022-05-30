<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Testcontact extends Component
{



    public function render()
    {
        $usersA = user::where('utype','=','ADM')

            ->get();
             $usersP = user::where('utype','=','SVP')

            ->get();

        return view('livewire.testcontact',['usersA'=> $usersA, 'usersP' => $usersP]);
    }
}
