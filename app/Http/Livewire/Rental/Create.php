<?php

namespace App\Http\Livewire\Rental;

use App\Models\Car;
use App\Models\User;
use App\Models\Rental;
use Livewire\Component;

class Create extends Component
{

    public $customer_id;
    public $car_id;
    public $rent_start_date;
    public $rent_end_date;

    protected $rules = [
        'customer_id' => 'required',
        'car_id' => 'required',
        'rent_start_date' => 'required|date_format:Y-m-d',
        'rent_end_date' => 'nullable|date_format:Y-m-d|after_or_equal:rent_start_date',
    ];

    public function render()
    {
        return view('livewire.rental.create', [
            "users" => User::select(['id', 'firstname', 'lastname'])->get(),
            "cars" => Car::select(['id', 'name'])->get(),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        Rental::create($this->validate());
        session()->flash('success', __('livewire\rental.successfully_created'));
        return redirect()->route('rentals.index');
    }
}