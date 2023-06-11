<?php

namespace App\Http\Livewire\Orders\Modal;

use Livewire\Component;
use App\Models\Sales;

class AddModal extends Component
{
    public function render()
    {
        return view('livewire.orders.modal.add-modal');
    }


    public 
    $sales_date, 
    $page, 
    $csr_name, 
    $customer_name,
    $number,
    $address_landmark,
    $main_item,
    $sku_1,
    $sku_2,
    $sku_3,
    $sku_4,
    $upseller,
    $upsell_item,
    $price,
    $upsell_price,
    $final_price,
    $notes,
    $call_text_status,
    $shipper,
    $courier,
    $status,
    $tracking_number,
    $pos,
    $rts_tracking_number;


    /**
     * Input fields on update validation
     */
    public function updated($fields) 
    {
        $this->validateOnly($fields, [
            'sales_date' => 'required',
            'page' => 'required',
            'csr_name' => 'required',
            'customer_name' => 'required',
            'number' => 'required',
            'address_landmark' => 'required',
            'main_item' => 'required',
            'sku_1' => 'required',
            'sku_2' => 'required',
            'sku_3' => 'required',
            'sku_4' => 'required',
            'upseller' => 'required',
            'upsell_item' => 'required',
            'price' => 'required',
            'upsell_price' => 'required',
            'final_price' => 'required',
            'notes' => 'required',
            'call_text_status' => 'required',
            'shipper' => 'required',
            'courier' => 'required',
            'status' => 'required',
            'tracking_number' => 'required',
            'pos' => 'required',
            'rts_tracking_number' => 'required',
        ]);
    }


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->sales_date = '';
        $this->page = '';
        $this->csr_name = '';
        $this->customer_name = '';
        $this->number = '';
        $this->address_landmark = '';
        $this->main_item = '';
        $this->sku_1 = '';
        $this->sku_2 = '';
        $this->sku_3 = '';
        $this->sku_4 = '';
        $this->upseller = '';
        $this->upsell_item = '';
        $this->price = '';
        $this->upsell_price = '';
        $this->final_price = '';
        $this->notes = '';
        $this->call_text_status = '';
        $this->shipper = '';
        $this->courier = '';
        $this->status = '';
        $this->tracking_number = '';
        $this->pos = '';
        $this->rts_tracking_number = '';
    }


    /**
     * store the user inputted post data in the sales table
     * @return void
    */
    public function orderStore()
    {
        $this->validate([
            'sales_date' => 'required',
            'page' => 'required',
            'csr_name' => 'required',
            'customer_name' => 'required',
            'number' => 'required',
            'address_landmark' => 'required',
            'main_item' => 'required',
            'sku_1' => 'required',
            'sku_2' => 'required',
            'sku_3' => 'required',
            'sku_4' => 'required',
            'upseller' => 'required',
            'upsell_item' => 'required',
            'price' => 'required',
            'upsell_price' => 'required',
            'final_price' => 'required',
            'notes' => 'required',
            'call_text_status' => 'required',
            'shipper' => 'required',
            'courier' => 'required',
            'status' => 'required',
            'tracking_number' => 'required',
            'pos' => 'required',
            'rts_tracking_number' => 'required',
        ]);

        $sales = new Sales();
        $sales->sales_date = $this->sales_date;
        $sales->page = $this->page;
        $sales->csr_name = $this->csr_name;
        $sales->customer_name = $this->customer_name;
        $sales->number = $this->number;
        $sales->address_landmark = $this->address_landmark;
        $sales->main_item = $this->main_item;
        $sales->sku_1 = $this->sku_1;
        $sales->sku_2 = $this->sku_2;
        $sales->sku_3 = $this->sku_3;
        $sales->sku_4 = $this->sku_4;
        $sales->upseller = $this->upseller;
        $sales->upsell_item = $this->upsell_item;
        $sales->price = $this->price;
        $sales->upsell_price = $this->upsell_price;
        $sales->final_price = $this->final_price;
        $sales->notes = $this->notes;
        $sales->call_text_status = $this->call_text_status;
        $sales->shipper = $this->shipper;
        $sales->courier = $this->courier;
        $sales->status = $this->status;
        $sales->tracking_number = $this->tracking_number;
        $sales->pos = $this->pos;
        $sales->rts_tracking_number = $this->rts_tracking_number;

        $sales->save();

        session()->flash('message', 'New record has been added successfully!');
        $this->resetFields();

        // Hide modal
        $this->dispatchBrowserEvent('close-modal');
    }
}
