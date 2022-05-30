<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSliderComponent extends Component
{
    use WithPagination;

    public function deleteslide($slid_id)
    {
        $slide=Slider::find($slid_id);
        unlink('images/slider/'  . $slide->image);
        $slide ->delete();
        session()->flash('message','slid has been deleted');

    }


    public function render()
    {
        $slides=Slider::paginate(10);

        return view('livewire.admin.admin-slider-component',['slides'=>$slides])->layout('layouts.base');
    }
}
