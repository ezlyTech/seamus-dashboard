<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

class General extends Component
{
    public 
    $status_name, 
    $status_edit_id,
    $cts_name, 
    $cts_edit_id;

    /**
     * Input fields on update validation
     */
    public function updated($fields) 
    {
        $this->validateOnly($fields, [
            'status_name' => 'required',
            'cts_name' => 'required',
        ]);
    }

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->status_edit_id = '';
        $this->cts_name = '';
    }

    /*
        * store the user inputted post data in the sales table
        * @return void
    */
    public function statusStore()
    {        
        // on form submit validation
        $this->validate([
            'status_name' => 'required'
        ]);

        // Add order data
        $status = new Status();
        $status->status_name = $this->status_name;

        $status->save();

        session()->flash('message', 'New status has been added successfully!');
        $this->resetFields();

        // Hide modal
        $this->dispatchBrowserEvent('close-add-modal');
    }

    public function ctsStore()
    {        
        // on form submit validation
        $this->validate([
            'cts_name' => 'required'
        ]);

        // Add order data
        $cts = new CallTextStatus();
        $cts->cts_name = $this->cts_name;

        $cts->save();

        session()->flash('message', 'New status has been added successfully!');
        $this->resetFields();

        // Hide modal
        $this->dispatchBrowserEvent('close-add-modal');
    }



    /**
     * Close Modal
     * 
    */
    public function closeModal() {
        $this->resetFields();
    }

    public function render()
    {
        return view('livewire.general', [
            'statuses'=>Status::orderBy('status_name', 'asc')->get(),
            'calltextstatus'=>CallTextStatus::orderBy('cts_name', 'asc')->get(),
            'couriers'=>Courier::orderBy('courier_name', 'asc')->get()
        ]);
    }
}
