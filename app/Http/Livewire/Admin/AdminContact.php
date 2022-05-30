<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use App\Models\User;
use Livewire\Component;

class AdminContact extends Component
{
    public function deletemessage($id)
    {
        $contact_id = Contact::find($id);

        $contact_id->delete();
        session()->flash('message', 'this service has been deleted successfuly');
    }
    public function render()
    {
        $contact= Contact::paginate(15);
        return view('livewire.admin.admin-contact',['contact'=>$contact])->layout('layouts.base');;
    }
}
