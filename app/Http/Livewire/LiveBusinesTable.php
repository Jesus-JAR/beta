<?php

namespace App\Http\Livewire;

use App\Models\Business;
use Livewire\Component;
use Livewire\WithPagination;

class LiveBusinesTable extends Component
{
    use WithPagination;

    public function render()
    {
        // llamamos a la vista para mostrar empresas
        $business = Business::all();
        return view('livewire.live-busines-table', [
            'business' => Business::paginate(2),
        ]);
    }
}
