<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $firstname;
    public $lastname;
    public $email;

    protected $rules = [
        'firstname' => 'required|min:3',
        'lastname' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
    ];

    public function render()
    {
        return view('livewire.user.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => bcrypt("123456")
        ]);

        session()->flash('success', __('livewire\user.successfully_created'));
        return redirect()->route('users.index');
    }
}