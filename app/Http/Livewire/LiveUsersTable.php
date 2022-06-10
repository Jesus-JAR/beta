<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LiveUsersTable extends Component
{
    use WithPagination;

    public function render()
    {
        // llamamos a la vista para mostrar los usuarios
        $users = User::all();
        return view('livewire.live-users-table', [
            'users' => User::paginate(2),
        ]);
    }
}
