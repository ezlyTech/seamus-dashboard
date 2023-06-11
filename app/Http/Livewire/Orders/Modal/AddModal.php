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
    $order_id,
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
     * List of add/edit form rules
     */
    protected $rules = [
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
    ];


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
        $this->validate();
        try {
            Sales::create([
                'sales_date' => $this->sales_date,
                'page' => $this->page,
                'csr_name' => $this->csr_name,
                'customer_name' => $this->customer_name,
                'number' => $this->number,
                'address_landmark' => $this->address_landmark,
                'main_item' => $this->main_item,
                'sku_1' => $this->sku_1,
                'sku_2' => $this->sku_2,
                'sku_3' => $this->sku_3,
                'sku_4' => $this->sku_4,
                'upseller' => $this->upseller,
                'upsell_item' => $this->upsell_item,
                'price' => $this->price,
                'upsell_price' => $this->upsell_price,
                'final_price' => $this->final_price,
                'notes' => $this->notes,
                'call_text_status' => $this->call_text_status,
                'shipper' => $this->shipper,
                'courier' => $this->courier,
                'status' => $this->status,
                'tracking_number' => $this->tracking_number,
                'pos' => $this->pos,
                'rts_tracking_number' => $this->rts_tracking_number,
            ]);
            session()->flash('success','Order Created Successfully!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }
}
