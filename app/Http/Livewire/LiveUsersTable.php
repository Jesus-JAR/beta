<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LiveUsersTable extends Component
{
    use WithPagination;

    // Variable
    public $search;
    public $perPage;

    public function render()
    {
        // llamamos a la vista para mostrar los usuarios
        return view('livewire.live-users-table', [
            'users' => User::where('first_name', 'like', "%$this->search%")
            ->orWhere('last_name', 'like', "%$this->search%")
            ->paginate($this->perPage),
        ]);
    }
}
