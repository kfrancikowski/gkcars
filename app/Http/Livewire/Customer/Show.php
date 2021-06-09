<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;

class Show extends Component
{
    public $model;
    
    public function mount($id){
        $this->model = Customer::with('rentals')->find($id);
    }

    public function render()
    {
        return view('livewire.customer.show', [
            'model' => $this->model,
        ]);
    }
}