<?php

namespace App\Http\Livewire;

// namespace App\Http\Middleware;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $scategories= ServiceCategory::inRandomOrder()->take(15)->get();
        $featured = Service::where('featured',1)->inRandomOrder()->take(10)->get();
        $featuredcat=ServiceCategory::where('featured',1)->take(10)->get();
        $slides= Slider::where('status',1)->get();
        $sid= ServiceCategory::whereIn('slug',['ac', 'beauty', 'plumbing', 'electrical', 'shower'])->get()->pluck('id');
        $aservices= Service::whereIn('service_category_id',$sid)->inRandomOrder()->take(4)->get();
        // $aservices = Service::all();


        return view('livewire.Home',['scategories'=> $scategories, 'featured' =>$featured, 'featuredcat' =>$featuredcat, 'slides' =>$slides, 'aservices' => $aservices])->layout('layouts.base');
    }
}
