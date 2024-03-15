<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    #[Validate('required')]
    public $name;
    #[Validate('required|email|unique:users')]
    public $email;
    #[Validate('required')]
    public $password;
    
    public function save(){
        $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
    }
}
