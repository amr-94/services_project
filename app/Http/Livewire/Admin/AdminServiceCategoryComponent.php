<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;

    public function deleteservicecategory($id)
    {
        $category =ServiceCategory::find($id);
        if($category ->image)
        {
            unlink('images/categories'.'/'.$category ->image);

        }
        $category ->delete();
        session()->flash('message','service category has been deleted');


    }


    public function render()
    {
        $catagories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component',['catagories'=> $catagories])->layout('layouts.base');
    }
}
