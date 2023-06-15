<?php

namespace App\Http\Livewire\Orders\Modal;

use Livewire\Component;
use App\Models\Sales;

class EditModal extends Component
{
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


    public function editOrder($id) {
        $sales = Sales::where('id', $id)->first();

        $this->sales_date = $sales->sales_date;
        $this->page = $sales->page;
        $this->csr_name = $sales->csr_name;
        $this->customer_name = $sales->customer_name;
        $this->number = $sales->number;
        $this->address_landmark = $sales->address_landmark;
        $this->main_item = $sales->main_item;
        $this->sku_1 = $sales->sku_1;
        $this->sku_2 = $sales->sku_2;
        $this->sku_3 = $sales->sku_3;
        $this->sku_4 = $sales->sku_4;
        $this->upseller = $sales->upseller;
        $this->upsell_item = $sales->upsell_item;
        $this->price = $sales->price;
        $this->upsell_price = $sales->upsell_price;
        $this->final_price = $sales->final_price;
        $this->notes = $sales->notes;
        $this->call_text_status = $sales->call_text_status;
        $this->shipper = $sales->shipper;
        $this->courier = $sales->courier;
        $this->status = $sales->status;
        $this->tracking_number = $sales->tracking_number;
        $this->pos = $sales->pos;
        $this->rts_tracking_number = $sales->rts_tracking_number;
    }

    public function editOrderData() {

    }


    public function render()
    {
        return view('livewire.orders.modal.edit-modal');
    }
}
