<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;

class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $catagories = ServiceCategory::all();
        return view('livewire.service-categories-component', ['catagories' => $catagories])->layout('layouts.base');
    }
}
