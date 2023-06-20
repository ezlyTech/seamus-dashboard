<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Imports\SalesImport;
use Excel;

class Import extends Component
{
    /**
     * Import CSV
     * 
    */
    public function importfile(Request $request) {
        Excel::import(new SalesImport, $request->file);
        return "Records are imported successfully!"
    }


    public function render()
    {
        return view('livewire.import');
    }
}
