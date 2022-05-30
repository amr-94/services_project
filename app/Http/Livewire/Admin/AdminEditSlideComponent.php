<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;


class AdminEditSlideComponent extends Component
{
    use WithFileUploads;

    public $slide_id;

    public $title;
    public $image;
    public $status ;
    public $newimage;

    public function mount($slide_id)
    {
        $slide=slider::find($slide_id);
        $this->slide_id = $slide->id;
        $this->title =$slide->title;
        $this->image = $slide->image;
        $this->status =$slide->status;


    }



    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',

        ]);

        if($this->newimage)
        {
            $this ->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png'


            ]);
        }
    }




    public function updateslides()
    {
        $this->validate([
            'title' => 'required',

        ]);
        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,png'


            ]);
        }
        $slide =  Slider::find($this->slide_id);
        $slide->title = $this->title;


        if($this->newimage){

            unlink('images/slider' . '/' . $slide->newimage);
            $newimage = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('slider', $newimage);


            // {
                // $imagename = Carbon::now()->timestamp . '-' . $this->newimage->extension();
                // $this->newimage->storeAs('slider', $imagename);
                // $slide->image = $imagename;
            // }
            $slide->image = $newimage;
        }


        $slide->status = $this->status;
        $slide->save();
        session()->flash('message', 'slide has been updated');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-slide-component')->layout('layouts.base');
    }
}
