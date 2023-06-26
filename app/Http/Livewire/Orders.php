<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

use Carbon\Carbon;

class Orders extends Component
{    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'showCustomerDetails' => 'showCustomerDetails',
    ];

    public $byStatus = null;
    public $byCTS = null;
    public $byCourier = null;
    public $perPage = 15;
    public $orderBy = 'page_name';
    public $sortBy = 'asc';
    public $from;
    public $to;
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
    $cts_id,
    $courier_id,
    $status_id,
    $tracking_number,
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
            'main_item' => '',
            'sku_1' => 'required',
            'sku_2' => 'required',
            'sku_3' => '',
            'sku_4' => '',
            'upseller' => '',
            'upsell_item' => '',
            'price' => 'required',
            'upsell_price' => '',
            'final_price' => 'required',
            'notes' => '',
            'cts_id' => 'required',
            'courier_id' => 'required',
            'status_id' => 'required',
            'tracking_number' => 'required',
            'rts_tracking_number' => '',
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
        $this->cts_id = '';
        $this->courier_id = '';
        $this->status_id = '';
        $this->tracking_number = '';
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
            'main_item' => '',
            'sku_1' => 'required',
            'sku_2' => 'required',
            'sku_3' => '',
            'sku_4' => '',
            'upseller' => '',
            'upsell_item' => '',
            'price' => 'required',
            'upsell_price' => '',
            'final_price' => 'required',
            'notes' => '',
            'cts_id' => 'required',
            'courier_id' => 'required',
            'status_id' => 'required',
            'tracking_number' => 'required',
            'rts_tracking_number' => '',
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
        $sales->cts_id = $this->cts_id;
        $sales->courier_id = $this->courier_id;
        $sales->status_id = $this->status_id;
        $sales->tracking_number = $this->tracking_number;
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
        $this->cts_id = $sales->cts_id;
        $this->courier_id = $sales->courier_id;
        $this->status_id = $sales->status_id;
        $this->tracking_number = $sales->tracking_number;
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
            'main_item' => '',
            'sku_1' => 'required',
            'sku_2' => 'required',
            'sku_3' => '',
            'sku_4' => '',
            'upseller' => '',
            'upsell_item' => '',
            'price' => 'required',
            'upsell_price' => '',
            'final_price' => 'required',
            'notes' => '',
            'cts_id' => 'required',
            'courier_id' => 'required',
            'status_id' => 'required',
            'tracking_number' => 'required',
            'rts_tracking_number' => '',
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
        $sales->cts_id = $this->cts_id;
        $sales->courier_id = $this->courier_id;
        $sales->status_id = $this->status_id;
        $sales->tracking_number = $this->tracking_number;
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
        $this->order_delete_id = $id;
    }

    public function deleteOrderData() {
        $sales = Sales::where('id', $this->order_delete_id)->first();
        $sales->delete();

        // Hide modal
        $this->dispatchBrowserEvent('close-delete-modal');

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


    
    /**
     * Open View
     * 
    */
    public function showCustomerDetails($orderId)
    {
        $this->orderId = $orderId;
        return redirect()->to('/orders/' . $orderId);
    }


    public function render()
    {
        return view('livewire.orders', [
            'statuses'=>Status::orderBy('status_name', 'asc')->get(),
            'couriers'=>Courier::orderBy('courier_name', 'asc')->get(),
            'calltextstatus'=>CallTextStatus::orderBy('cts_name', 'asc')->get(),
            'orders'=>Sales::when($this->byStatus, function($query) {
                                $query->where('status_id', $this->byStatus);
                            })
                            ->when($this->byCTS, function($query) {
                                $query->where('cts_id', $this->byCTS);
                            })
                            ->when($this->byCourier, function($query) {
                                $query->where('courier_id', $this->byCourier);
                            })
                            ->when($this->from, function($query) {
                                $query->where('sales_date', '>=', Carbon::parse($this->from)->startOfDay());
                            })
                            ->when($this->to, function ($query) {
                                $query->where('sales_date', '<=', Carbon::parse($this->to)->endOfDay());
                            })
                            ->search(trim($this->search))
                            ->orderBy($this->orderBy, $this->sortBy)
                            ->paginate($this->perPage)
        ]);
    }
    
}
