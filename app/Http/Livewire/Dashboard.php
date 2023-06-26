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
        // 1. Order Count (per day)
        $ordersPerDay = Sales::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
                        ->groupBy('date')
                        ->get();

        // 2. Order count added for the past 7 days
        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();

        $ordersLast7Days = Sales::whereBetween('created_at', [$startDate, $endDate])
                                    ->count();

        // 3. Gross sales (per day) in decimal with comma format
        $grossSalesPerDay = Sales::select(DB::raw('DATE(created_at) as date'), DB::raw('FORMAT(SUM(price), 2) as gross_sales'))
                                    ->groupBy('date')
                                    ->get();

        // 4. Gross sales increase in percentage
        $previousGrossSales = Sales::whereDate('created_at', '<', Carbon::today()->subDays(1))
                                    ->sum('price');

        $currentGrossSales = Sales::whereDate('created_at', Carbon::today())
                                    ->sum('price');

        $grossSalesIncrease = ($currentGrossSales - $previousGrossSales) / $previousGrossSales * 100;

        // 5. Average value (formula: gross sales divided by order count) per day
        $averageValuePerDay = Sales::select(DB::raw('DATE(created_at) as date'), DB::raw('FORMAT(SUM(price) / COUNT(*), 2) as average_value'))
                                    ->groupBy('date')
                                    ->get();

        // 6. Average value increase in percentage
        $previousAverageValue = Sales::whereDate('created_at', '<', Carbon::today()->subDays(1))
                                    ->sum('price') / max(1, Sales::whereDate('created_at', '<', Carbon::today()->subDays(1))
                                    ->count());

        $currentAverageValue = Sales::whereDate('created_at', Carbon::today())
                                    ->sum('price') / max(1, Sales::whereDate('created_at', Carbon::today())
                                    ->count());

        $averageValueIncrease = ($previousAverageValue != 0) ? (($currentAverageValue - $previousAverageValue) / $previousAverageValue * 100) : 0;

        // Pass the computed values to your view
        return view('livewire.dashboard', compact(
            'ordersPerDay',
            'ordersLast7Days',
            'grossSalesPerDay',
            'grossSalesIncrease',
            'averageValuePerDay',
            'averageValueIncrease'
        ));
    }
}
