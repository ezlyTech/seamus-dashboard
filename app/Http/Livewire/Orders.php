<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sales;

class Orders extends Component
{
    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.sales');
    }
}