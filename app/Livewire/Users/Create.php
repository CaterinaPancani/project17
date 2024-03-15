<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required|email|unique:users')]
    public $email;
    #[Validate('required')]
    public $password;
    
    public function render()
    {
        return view('livewire.users.create');
    }
    public function store(){

        $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);

        session()->flash('success','user successfully created.');
        $this->reset();
    }
}
