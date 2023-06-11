<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sales;

class Orders extends Component
{    
    public $dataSales;

    public function mount() {
        $this->dataSales = Sales::all();
    }

    public function render()
    {
        return view('components.orders.table.table', ['sales'=>$this->dataSales]);
    }


    // public function edit($id)
    // {
    //     $this->updateMode = true;
    //     $order = Sales::where('id',$id)->first();

    //     $this->order_id = $id;
    //     $this->sales_date = $user->sales_date;
    //     $this->page = $user->page;
    //     $this->csr_name = $user->csr_name;
    //     $this->customer_name = $user->customer_name;
    //     $this->number = $user->number;
    //     $this->address_landmark = $user->address_landmark;
    //     $this->main_item = $user->main_item;
    //     $this->sku_1 = $user->sku_1;
    //     $this->sku_2 = $user->sku_2;
    //     $this->sku_3 = $user->sku_3;
    //     $this->sku_4 = $user->sku_4;
    //     $this->upseller = $user->upseller;
    //     $this->upsell_item = $user->upsell_item;
    //     $this->price = $user->price;
    //     $this->upsell_price = $user->upsell_price;
    //     $this->final_price = $user->final_price;
    //     $this->notes = $user->notes;
    //     $this->call_text_status = $user->call_text_status;
    //     $this->shipper = $user->shipper;
    //     $this->courier = $user->courier;
    //     $this->status = $user->status;
    //     $this->tracking_number = $user->tracking_number;
    //     $this->pos = $user->pos;
    //     $this->rts_tracking_number = $user->rts_tracking_number;
    // }


    // public function cancel()
    // {
    //     $this->updateMode = false;
    //     $this->resetInputFields();
    // }


    // public function update()
    // {
    //     $validatedDate = $this->validate([
    //         'sales_date' => 'required|date',
    //         'page' => 'required',
    //         'csr_name' => 'required',
    //         'customer_name' => 'required',
    //         'number' => 'required',
    //         'address_landmark' => 'required',
    //         'main_item' => 'required',
    //         'sku_1' => 'required',
    //         'sku_2' => 'required',
    //         'sku_3' => 'required',
    //         'sku_4' => 'required',
    //         'upseller' => 'required',
    //         'upsell_item' => 'required',
    //         'price' => 'required',
    //         'upsell_price' => 'required',
    //         'final_price' => 'required',
    //         'notes' => '',
    //         'call_text_status' => 'required',
    //         'shipper' => 'required',
    //         'courier' => 'required',
    //         'status' => 'required',
    //         'tracking_number' => 'required',
    //         'pos' => 'required',
    //         'rts_tracking_number' => 'required',
    //     ]);
    //     if ($this->order_id) {
    //         $order = Sales::find($this->order_id);
    //         $order->update([
    //             'name' => $this->name,
    //             'email' => $this->email,
    //         ]);
    //         $this->updateMode = false;
    //         session()->flash('message', 'Users Updated Successfully.');
    //         $this->resetInputFields();
    //     }
    // }


    // public function delete($id)
    // {
    //     if($id){
    //         Sales::where('id',$id)->delete();
    //         session()->flash('message', 'Users Deleted Successfully.');
    //     }
    // }
}
