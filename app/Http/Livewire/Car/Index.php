<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use Livewire\Component;
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
        $model = Car::where('name', 'like', '%' . $this->search . '%');
        return view('livewire.car.index', [
            'model' => $model->paginate(10),
        ]);
    }
}