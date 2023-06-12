<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sales;

class Orders extends Component
{    
    // public $dataSales;

    // public function mount() {
    //     $this->dataSales = Sales::all();
    // }

    public function render()
    {
        $orders = Sales::all();
        return view('livewire.orders', ['orders' => $orders]);
    }
}
