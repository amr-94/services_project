<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\User;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public function update($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'

        ]);
    }
    public function sendmessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'

        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact -> save();
        session()->flash('message','your message has been submitted succssfully');
    }




    public function render()
    {
        $admin = user::where('utype', '=', 'ADM') ->get();
        return view( 'livewire.contact-component', ['admin' => $admin])->layout('layouts.base');
    }
}
