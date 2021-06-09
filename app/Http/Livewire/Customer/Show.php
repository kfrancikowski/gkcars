<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class Show extends Component
{
    public $model;
    
    public function render()
    {
        return view('livewire.customer.show', [
            'model' => $this->model,
        ]);
    }
}