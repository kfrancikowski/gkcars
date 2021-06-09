<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function search_updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        $model = Customer::withCount('rentals')->where('firstname', 'like', '%' . $this->search . '%')->orWhere('lastname', 'like', '%' . $this->search . '%');
        return view('livewire.customer.index', [
            'model' => $model->paginate(10),
        ]);
    }
}