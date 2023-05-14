<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class SalesController extends Controller
{
    public function index() {
        return view('livewire.sales', [
            'sales' => Sales::all()
        ]);
    }

    public function show(Sales $sales) {
        return view('livewire.sales', [
            'sales' => Sales::all()
        ]);
    }
}
