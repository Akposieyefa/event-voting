<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    //public properties
    public  $users;


    //displaying all users
    public function mount()
    {
       $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.users');
    }
}
