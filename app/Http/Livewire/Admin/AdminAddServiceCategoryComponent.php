<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AdminAddServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;
    public function generateSlug()
    {
        $this -> slug=str::slug($this->name,'-');
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'name' => 'required',
        'slug' => 'required',
        'image' => 'required|mimes:jpeg,png'
        ]);
    }


    public function createNewCatrgory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:jpeg,png'


    ]);
    $category= new ServiceCategory();
    $category ->name = $this ->name;
    $category -> slug=$this->slug;
        // $imageName = $this->image->getClientOriginalName();
    // _________________________________


    $imageName = Carbon::now('Africa/Cairo')->timestamp.'.' . $this ->image->extension();

    $this -> image->storeAs('categories',$imageName );
    $category->image=$imageName;

    $category->save();
    session()->flash('message','category has been created successfully !');

    }

    public function render()
    {
        return view('livewire.admin.admin-add-service-category-component')->layout('layouts.base');
    }
}
