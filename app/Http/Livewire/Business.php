<?php

namespace App\Http\Livewire;

use App\Models\Business as ModelsBusiness;
use Livewire\Component;


class Business extends Component
{
    public function render()
    {
        $companies = ModelsBusiness::all();

        return view('livewire.business', compact('companies'));
    }
}
