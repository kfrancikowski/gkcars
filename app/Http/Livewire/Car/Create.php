<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use Livewire\Component;

class Create extends Component
{

    public $name;

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function render()
    {
        return view('livewire.car.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        Car::create([
            'name' => $this->name,
        ]);

        session()->flash('success', __('livewire\car.successfully_created'));
        return redirect()->route('cars.index');
    }
}