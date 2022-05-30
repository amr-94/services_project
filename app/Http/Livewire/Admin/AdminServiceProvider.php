<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Livewire\Component;

class AdminServiceProvider extends Component
{
    public function render()
    {
        $sprovider=ServiceProvider::paginate(12);
        // $providerservice = ServiceProvider::where('services_id', $this->id)->get();


        return view('livewire.admin.admin-service-provider',['sprovider'=>$sprovider ])->layout('layouts.base');
    }
}
