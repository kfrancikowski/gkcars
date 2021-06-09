<?php

namespace App\Http\Livewire\Rental;

use App\Models\Rental;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

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
        $model = Rental::with(['car', 'customer'])->whereHas('customer', function (Builder $query){
            $query->where('firstname', 'like', '%' . $this->search . '%')->orWhere('lastname', 'like', '%' . $this->search . '%');
        });
        
        return view('livewire.rental.index', [
            'model' => $model->paginate(10),
        ]);
    }
}