<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sales;

class Orders extends Component
{    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshComponent' => '$refresh'];

    public $byStatus = null;
    public $perPage = 15;
    public $orderBy = 'page_name';
    public $sortBy = 'asc';
    public $search;

    public 
    $order_id, 
    $sales_date, 
    $page_name, 
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
    $rts_tracking_number,
    $order_edit_id, 
    $order_delete_id;


    /**
     * Input fields on update validation
     */
    public function updated($fields) 
    {
        $this->validateOnly($fields, [
            'sales_date' => 'required',
            'page_name' => 'required',
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
        $this->order_edit_id = '';
        $this->sales_date = '';
        $this->page_name = '';
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
        $this->emit('refreshComponent');
        
        // on form submit validation
        $this->validate([
            'sales_date' => 'required',
            'page_name' => 'required',
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

        // Add order data
        $sales = new Sales();
        $sales->sales_date = $this->sales_date;
        $sales->page_name = $this->page_name;
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
        $this->dispatchBrowserEvent('close-add-modal');
    }



    /**
     * Edit data
     * 
    */
    public function editOrder($id) {
        $sales = Sales::where('id', $id)->first();

        $this->order_edit_id = $sales->id;
        $this->sales_date = $sales->sales_date;
        $this->page_name = $sales->page_name;
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
        // on form submit validation
        $this->validate([
            'sales_date' => 'required',
            'page_name' => 'required',
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

        $sales = Sales::where('id', $this->order_edit_id)->first();

        $sales->sales_date = $this->sales_date;
        $sales->page_name = $this->page_name;
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

        session()->flash('message', 'New record has been updated successfully!');

        // Hide modal
        $this->dispatchBrowserEvent('close-edit-modal');
        $this->resetFields();
    }



    /**
     * Delete data
     * 
    */
    public function deleteConfirmation($id) {
        // $sales = Sales::where('id', $id)->first();

        $this->order_delete_id = $id;
    }

    public function deleteOrderData() {
        $sales = Sales::where('id', $this->order_delete_id)->first();
        $sales->delete();

        // Hide modal
        $this->dispatchBrowserEvent('close-edit-modal');

        session()->flash('message', 'Record has been deleted successfully!');

        $this->order_delete_id = '';
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
        // $orders = Sales::all();
        return view('livewire.orders', [
            // 'orders' => Sales::paginate(15),
            'orders'=>Sales::when($this->byStatus, function($query) {
                                $query->where('status', $this->byStatus);
                            })
                            ->search(trim($this->search))
                            ->orderBy($this->orderBy, $this->sortBy)
                            ->paginate($this->perPage)
        ]);
    }
    
}
