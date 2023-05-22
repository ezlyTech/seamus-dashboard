<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sales;

class Orders extends Component
{    
    public $dataSales;

    public function mount() {
        $this->dataSales = Sales::all();
    }

    public function render()
    {
        // return view('livewire.orders');
        // return view('livewire.orders', [
        //     'sales' => Sales::all(),
        // ]);
        return view('components.orders.table.table', ['sales'=>$this->dataSales]);
    }
}
