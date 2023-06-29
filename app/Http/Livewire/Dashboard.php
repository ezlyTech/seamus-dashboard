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
    public function render()
    {
        // Sales
        $sales = Sales::orderBy('id', 'asc')->get();

        $count = $sales->count();
        $totalPrice = $sales->sum('price');
        $average = $count > 0 ? round($totalPrice / $count, 2) : 0;


        // Statuses
        $statuses = Status::orderBy('status_name', 'asc')->get();
        $statusCounts = Sales::select('status_id', DB::raw('count(*) as count'))
                                ->groupBy('status_id')
                                ->get()
                                ->pluck('count', 'status_id');
        $statusTotalPrices = Sales::select('status_id', DB::raw('sum(price) as total_price'))
                                ->groupBy('status_id')
                                ->get()
                                ->pluck('total_price', 'status_id');
        $statusAverages = $statusCounts->map(function ($count, $statusId) use ($statusTotalPrices) {
            return $count > 0 ? round($statusTotalPrices[$statusId] / $count, 2) : 0;
        });


        // Couriers
        $couriers = Courier::orderBy('courier_name', 'asc')->get();
        $courierCounts = Sales::select('courier_id', DB::raw('count(*) as count'))
            ->groupBy('courier_id')
            ->get()
            ->pluck('count', 'courier_id');
        $courierTotalPrices = Sales::select('courier_id', DB::raw('sum(price) as total_price'))
            ->groupBy('courier_id')
            ->get()
            ->pluck('total_price', 'courier_id');
        $courierAverages = $courierCounts->map(function ($count, $courierId) use ($courierTotalPrices) {
            return $count > 0 ? round($courierTotalPrices[$courierId] / $count, 2) : 0;
        });


        // CSR
        $csr = Sales::orderBy('id', 'asc')->get();

        $csrData = $csr->groupBy('csr_name')->map(function ($csr) {
            $count = $csr->count();
            $totalPrice = $csr->sum('price');
            $average = $count > 0 ? round($totalPrice / $count, 2) : 0;

            return [
                'count' => $count,
                'totalPrice' => $totalPrice,
                'average' => $average,
            ];
        });

        // Pass the computed values to your view
        return view('livewire.dashboard', compact(
            'count',
            'totalPrice',
            'average',

            'statuses',
            'statusCounts',
            'statusTotalPrices',
            'statusAverages',

            'couriers',
            'courierCounts',
            'courierTotalPrices',
            'courierAverages',

            'csrData'
        ));
    }
}
