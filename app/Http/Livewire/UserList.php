<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{

    public $search = "";
    public $users = [];

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-list');
    }

    public function searchUser()
    {
        $this->users = User::where('name', 'like', '%' . $this->search . '%')->get();
    }
}
