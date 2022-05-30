<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use livewire\WithFileUploads;

class EditSproviderProfile extends Component
{
    use WithFileUploads;
    public $service_provider_id;
    public $image;
    public $about;
    public $city;
    public $service_category_id;
    public $service_location;
    public $newimage;
    public $phone;

           public function mount()
                {
             $sprovider= ServiceProvider::where('user_id',Auth::user()->id)->first();
        $this->service_provider_id = $sprovider->id;
        $this->image = $sprovider->image;
        $this->about = $sprovider->about;
        $this->phone = $sprovider->phone;

        $this->city = $sprovider->city;
        $this->service_category_id = $sprovider->service_category_id;
        $this->service_location = $sprovider->service_location;


                }

           public function updateprofile ()
           {
               $sprovider=ServiceProvider::where('user_id',Auth::user()->id)->first();
               if($this->newimage)
               {
                   $imagename=Carbon::now()->timestamp.'.'. $this->newimage->extension();
                   $this->newimage->storeAs('sprovider',$imagename);
                   $sprovider->image=$imagename;
               }
        $sprovider->about = $this->about;
        $sprovider->city = $this->city;
        $sprovider->phone = $this->phone;
        $sprovider->service_category_id = $this->service_category_id;
        $sprovider->service_location = $this->service_location;
        $sprovider ->save();
        session()->flash('message','profile has been updated');

           }






    public function render()
    {
        $categories=ServiceCategory::all();
        return view('livewire.sprovider.edit-sprovider-profile',['categories'=> $categories])->layout('layouts.base');
    }
}
