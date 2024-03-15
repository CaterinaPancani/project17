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
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
    }
}
