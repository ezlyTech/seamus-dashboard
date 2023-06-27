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
    $status_delete_id,
    $cts_name, 
    $cts_edit_id,
    $cts_delete_id,
    $courier_name, 
    $courier_edit_id,
    $courier_delete_id;


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->status_edit_id = '';
        $this->cts_name = '';
        $this->courier_name = '';
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

    public function courierStore()
    {        
        // on form submit validation
        $this->validate([
            'courier_name' => 'required'
        ]);

        // Add order data
        $courier = new Courier();
        $courier->courier_name = $this->courier_name;

        $courier->save();

        session()->flash('message', 'New courier has been added successfully!');
        $this->resetFields();

        // Hide modal
        $this->dispatchBrowserEvent('close-add-modal');
    }




    /**
     * Edit Modal
     * 
    */
    public function editStatus($id) {
        $status = Status::where('id', $id)->first();

        $this->status_edit_id = $status->id;
        $this->status_name = $status->status_name;
    }

    public function editStatusData() {
        // on form submit validation
        $this->validate([
            'status_name' => 'required'
        ]);

        $status = Status::where('id', $this->status_edit_id)->first();
        $status->status_name = $this->status_name;
        $status->save();

        session()->flash('message', 'Status has been updated successfully!');

        // Hide modal
        $this->dispatchBrowserEvent('close-edit-modal');
        $this->resetFields();
    }

    public function editCTS($id) {
        $cts = CallTextStatus::where('id', $id)->first();

        $this->cts_edit_id = $cts->id;
        $this->cts_name = $cts->cts_name;
    }

    public function editCTSData() {
        // on form submit validation
        $this->validate([
            'cts_name' => 'required'
        ]);

        $cts = CallTextStatus::where('id', $this->cts_edit_id)->first();
        $cts->cts_name = $this->cts_name;
        $cts->save();

        session()->flash('message', 'Status has been updated successfully!');

        // Hide modal
        $this->dispatchBrowserEvent('close-edit-modal');
        $this->resetFields();
    }

    public function editCourier($id) {
        $courier = Courier::where('id', $id)->first();

        $this->courier_edit_id = $courier->id;
        $this->courier_name = $courier->courier_name;
    }

    public function editCourierData() {
        // on form submit validation
        $this->validate([
            'courier_name' => 'required'
        ]);

        $courier = Courier::where('id', $this->courier_edit_id)->first();
        $courier->courier_name = $this->courier_name;
        $courier->save();

        session()->flash('message', 'Courier has been updated successfully!');

        // Hide modal
        $this->dispatchBrowserEvent('close-edit-modal');
        $this->resetFields();
    }




    /**
     * Delete data
     * 
    */
    public function deleteStatusConfirmation($id) {
        $this->status_delete_id = $id;
    }

    public function deleteStatusData() {
        $status = Status::where('id', $this->status_delete_id)->first();
        $status->delete();

        // Hide modal
        $this->dispatchBrowserEvent('close-delete-modal');

        session()->flash('message', 'Record has been deleted successfully!');

        $this->status_delete_id = '';
    }

    public function deleteCTSConfirmation($id) {
        $this->cts_delete_id = $id;
    }

    public function deleteCTSData() {
        $cts = CallTextStatus::where('id', $this->cts_delete_id)->first();
        $cts->delete();

        // Hide modal
        $this->dispatchBrowserEvent('close-delete-modal');

        session()->flash('message', 'Record has been deleted successfully!');

        $this->cts_delete_id = '';
    }

    public function deleteCourierConfirmation($id) {
        $this->courier_delete_id = $id;
    }

    public function deleteCourierData() {
        $courier = Courier::where('id', $this->courier_delete_id)->first();
        $courier->delete();

        // Hide modal
        $this->dispatchBrowserEvent('close-delete-modal');

        session()->flash('message', 'Record has been deleted successfully!');

        $this->courier_delete_id = '';
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
