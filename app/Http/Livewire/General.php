<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sales;
use App\Models\Status;

class General extends Component
{
    public function render()
    {
        return view('livewire.general', [
            'statuses'=>Status::orderBy('status_name', 'asc')->get()
        ]);
    }
}
