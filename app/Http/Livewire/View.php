<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

class View extends Component
{
    public function render()
    {
        return view('livewire.view');
    }
}
