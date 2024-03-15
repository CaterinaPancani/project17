<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Create extends Component
{
    public UserForm $form;
    public function render()
    {
        return view('livewire.users.create');
    }
    public function store(){
        $this->form->save();
        session()->flash('success','user successfully created.');
        $this->reset();
    }
}
