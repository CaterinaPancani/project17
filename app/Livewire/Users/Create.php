<?php

namespace App\Livewire\Users;

use App\Models\User;
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

        $validatedData = $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);

        session()->flash('success','user successfully created.');
        $this->reset();
    }
}
