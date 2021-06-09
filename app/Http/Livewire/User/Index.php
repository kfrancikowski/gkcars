<?php

namespace App\Http\Livewire\User;

use App\Models\User;
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
        $model = User::where('firstname', 'like', '%' . $this->search . '%')->orWhere('lastname', 'like', '%' . $this->search . '%');
        
        return view('livewire.user.index', [
            'model' => $model->paginate(10),
        ]);
    }
}