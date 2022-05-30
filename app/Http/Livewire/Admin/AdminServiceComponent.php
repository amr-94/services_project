<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class AdminServiceComponent extends Component
{




    use WithPagination;

    public function deleteservice($service_id)
    {
        $service = Service::find($service_id);
        if($service->thumbnail){
            unlink('images/services/thumbnails'.'/'. $service->thumbnail);
        }
        if($service->image){
            unlink('images/services' . '/' . $service->image);
        }
        $service->delete();
        session()->flash('message','this service has been deleted successfuly');
    }






    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-service-component',['services'=>$services])->layout('layouts.base');
    }
}
