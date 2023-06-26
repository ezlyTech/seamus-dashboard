<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    // For date range filter
    public $from;
    public $to;

    // For Order count
    public $orderCount;
    public $addedOrder;


    public function render()
    {
        // Calculate all orders
        $this->orderCount = Sales::count();

        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();

        $this->addedOrder = DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();

        return view('livewire.dashboard', [
            'orders'=>Sales::when($this->from, function($query) {
                                $query->where('sales_date', '>=', Carbon::parse($this->from)->startOfDay());
                            })
                            ->when($this->to, function ($query) {
                                $query->where('sales_date', '<=', Carbon::parse($this->to)->endOfDay());
                }),
            'addedOrder' => $this->addedOrder,
        ]);
    }
}
