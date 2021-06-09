<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;

class Create extends Component
{
    public $firstname;
    public $lastname;
    public $email;

    protected $rules = [
        'firstname' => 'required|min:3',
        'lastname' => 'required|min:3',
        'email' => 'required|email|unique:customers,email'
    ];

    public function render()
    {
        return view('livewire.customer.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        Customer::create($this->validate());
        session()->flash('success', __('livewire\customer.successfully_created'));
        return redirect()->route('customers.index');
    }
}