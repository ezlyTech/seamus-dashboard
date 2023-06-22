<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

class Dashboard extends Component
{
    public $from;
    public $to;


    public function render()
    {
        return view('livewire.dashboard', [
            'orders'=>Sales::when($this->from, function($query) {
                                $query->where('sales_date', '>=', Carbon::parse($this->from)->startOfDay());
                            })
                            ->when($this->to, function ($query) {
                                $query->where('sales_date', '<=', Carbon::parse($this->to)->endOfDay());
                            })
        ]);
    }
}
