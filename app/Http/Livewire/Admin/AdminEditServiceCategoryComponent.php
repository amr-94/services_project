<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;


    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public $featured;

      public function mount($category_id)
      {
          $category= ServiceCategory::find($category_id);
          $this->category_id = $category->id;
          $this ->name = $category->name;
          $this ->slug =$category ->slug;
          $this->image=$category->image;
          $this->featured=$category->featured;


      }


      public function generateSlug()
      {
          $this->slug=str::slug($this->name,'-');
      }


      public function update($fields)
      {
          $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required'

          ]);
         if($this->newimage)
         {
             $this->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png'


             ]);
         }

      }



      public function updateServiceCategory()
      {
          $this -> validate([
              'name'=>'required',
              'slug'=>'required'

          ]);
          if($this->newimage){
              $this->validate([
                  'newimage'=>'required|mimes:jpeg,png'
              ]);

          }
          $category= ServiceCategory::find($this->category_id);
          $category->name =$this->name;
          $category->slug=$this->slug;
          if ($this->newimage)
             {
            $imagename=Carbon::now()->timestamp.'-'. $this->newimage->extension();
            $this->newimage->storeAs('categories', $imagename);
            $category->image=$imagename;
            }
        $category->featured = $this->featured;

        $category->save();
        session()->flash('message','category has been updated successfully');
      }



    public function render()
    {

        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.base');
    }
}
