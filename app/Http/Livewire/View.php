<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

class View extends Component
{
    public $orderId;
    public $order;

    public function mount($orderId)
    {
        $this->orderId = $orderId;
    }

    public function render()
    {
        // Retrieve the customer details using the $customerId
        $this->order = Sales::find($this->orderId);

        return view('livewire.view');
    }
}
