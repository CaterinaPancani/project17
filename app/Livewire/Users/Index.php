<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $users=User::orderBy('updated_at','DESC')->paginate(2);
        return view('livewire.users.index',compact('users'));
    }
}
