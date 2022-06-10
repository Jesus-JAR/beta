<?php

namespace App\Http\Livewire;

use App\Models\Business;
use Livewire\Component;
use Livewire\WithPagination;

class LiveBusinesTable extends Component
{
    use WithPagination;

    // Variable
    public $search;
    public $perPage;

    public $camp = null;
    public $order = null;
    public $icon = 'circle';
    protected $queryString = [
        'search' => ['except' => ''],
        'camp' => ['except' => null],
        'order' => ['except' => null],
    ];

    public function render()
    {
        $business = Business::where('name', 'like', "%{$this->search}%")
            ->orWhere('address', 'like', "%$this->search%");

        // condicional para comprobar que no sea nulo los campos
        if ($this->camp && $this->order) {
            $business = $business->orderBy($this->camp, $this->order);
        }else{
            $this->camp = null;
            $this->order = null;
        }
        $business = $business->paginate($this->perPage);

        // llamamos a la vista para mostrar empresas
        return view('livewire.live-busines-table', [

            'business' => $business
        ]);
    }

    // para no perder los ordenes de la pagina al actualizar
    public function mount()
    {
        $this->icon = $this->iconDirection($this->order);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // limpiar todos los campos
    public function clear()
    {
        $this->page = 1;
        $this->order = null;
        $this->camp = null;
        $this->icon = 'circle';
        $this->search = '';
        $this->perPage = null;
    }


    public function sortable($camp)
    {
        if ($camp !== $this->camp) {
            $this->order = null;
        }
        switch ($this->order) {
            case null:
                $this->order = 'asc';
                break;
            case 'asc':
                $this->order = 'desc';
                break;
            case 'desc':
                $this->order = null;
                break;
        }
        $this->icon  = $this->iconDirection($this->order);
        $this->camp = $camp;
    }

    public function iconDirection($sort): string
    {
        if(!$sort){

            return 'circle';
        }else{

            return $sort === 'asc' ? 'arrow-circle-up' : 'arrow-circle-down';
        }

    }
}
