<?php

namespace App\Livewire\Users;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.users.create');
    }
    public function store(){
        
    }
}
