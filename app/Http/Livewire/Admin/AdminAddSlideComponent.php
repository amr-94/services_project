<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;


class AdminAddSlideComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $status=0;

    public function update($fields)
    {
      $this->validateOnly($fields,[
          'title'=>'required',
          'image' => 'required'

      ]);
    }

    public function addnewslide()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required'

        ]);
        $slide =new Slider();
        $slide ->title =$this->title ;
        $imagename= $this->image->getClientOriginalName();
        $this->image->storeAs('slider', $imagename);
        $slide->image = $imagename;
        $slide->save();


        session()->flash('message','slide has been create');

    }

    public function render()
    {
        return view('livewire.admin.admin-add-slide-component')->layout('layouts.base');
    }
}
