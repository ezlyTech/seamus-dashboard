<main class="main-content">
    <div class="container-fluid py-4">
        <div>
            <!-- Filters -->
            <div class="row">
                <div class="col-12">
                    <form action="" method="GET" style="width: 100%">
                        <div style="display:flex; justify-content:space-between;" class="flex-wrap">
                            <div style="width:fit-content" class="d-flex flex-wrap">
                                <div class="mx-2">
                                    <label for="">From</label>
                                    <input wire:model="from" type="date" class="form-control">
                                </div>
                                <div class="mx-2">
                                    <label for="">To</label>
                                    <input wire:model="to" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div class="mx-2" style="width:152px;">
                                    <label for="">Status</label>
                                    <select wire:model="byStatus" class="form-select">
                                        <option value="">Select Status</option>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mx-2" style="width:152px;">
                                    <label for="">Call & Text Status</label>
                                    <select wire:model="byCTS" class="form-select">
                                        <option value="">Select Status</option>
                                        @foreach ($calltextstatus as $cts)
                                            <option value="{{ $cts->id }}">{{ $cts->cts_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mx-2" style="width:152px;">
                                    <label for="">Courier</label>
                                    <select wire:model="byCourier" class="form-select">
                                        <option value="">Select Courier</option>
                                        @foreach ($couriers as $courier)
                                            <option value="{{ $courier->id }}">{{ $courier->courier_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mx-2" style="width:152px;">
                                    <label for="">Order By</label>
                                    <select class="form-select" wire:model="orderBy">
                                        <option value="page_name">Page Name</option>
                                        <option value="csr_name">CSR Name</option>
                                        <option value="customer_name">Customer Name</option>
                                        <option value="address_landmark">Address Landmark</option>
                                    </select>
                                </div>
                                <div class="mx-2" style="width: 320px;">
                                    <label for="">Search</label>
                                    <input type="text" class="form-control" wire:model.debounce.350ms="search" placeholder="Eg. Number, Customer Name, or Tracking #">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row d-flex mt-2 justify-content-end">
                        </div> --}}
                    </form>
                    <hr>
                </div>
            </div>


            <!-- Table -->
            <div class="row">
                @if (session()->has('message'))
                    <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)" class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Sales table</h6>
                    <div>
                        <a class="btn btn-icon btn-3 btn-outline-primary" type="button" href="{{ route('import') }}">
                            <span class="btn-inner--icon pe-1"><i class="fa fa-plus"></i></span>
                            <span class="btn-inner--text">Import CSV</span>
                        </a>
                        <button class="btn btn-icon btn-3 btn-info" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                          <span class="btn-inner--icon pe-1"><i class="fa fa-plus"></i></span>
                          <span class="btn-inner--text">Add new</span>
                        </button>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 table-striped table-hover" style="border-collapse: collapse">
                            <thead class="position-relative">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Sales Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Page</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">CSR Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Customer Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Address Landmark</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Call & Text  <br> Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">SKU 1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">SKU 2</th>
                                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Upseller</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Upsell Item</th> --}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Main Item</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-end">Price</th>
                                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-end">Upsell Price</th> --}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-end">Final Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Courier</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Tracking Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">RTS Tracking Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder position-sticky top-0 end-0 bg-white text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ( $orders->count() > 0 )
                                    @foreach ( $orders as $order )
                                        <tr>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->id }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sales_date }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold text-uppercase">{{ $order->page_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold text-uppercase">{{ $order->csr_name }}</span>
                                            </td>
                                            <td>
                                                <a href="#" style="color: #8392AB" wire:click="$emit('showCustomerDetails', {{ $order->id }})" onMouseOver="this.style.color='#2d4491'" onMouseOut="this.style.color='#8392AB'" >
                                                    <span class="text-xs font-weight-bold text-capitalize">{{ $order->customer_name }}</span>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->number }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->address_landmark }}</span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="badge badge-sm 
                                                {{ $order->status->status_name == 'Delivered' ? 'delivered' : ''  }}
                                                {{ $order->status->status_name == 'On Delivery' ? 'on-delivery' : ''  }}
                                                {{ $order->status->status_name == 'In-Transit' ? 'in-transit' : ''  }}
                                                {{ $order->status->status_name == 'Incomplete' ? 'incomplete' : ''  }}
                                                {{ $order->status->status_name == 'Picked-Up' ? 'picked-up' : ''  }}
                                                {{ $order->status->status_name == 'Problematic' ? 'problematic' : ''  }}
                                                {{ $order->status->status_name == 'Reserved' ? 'reserved' : ''  }}
                                                {{ $order->status->status_name == 'Returned' ? 'returned' : ''  }}
                                                {{ $order->status->status_name == 'ODZ' ? 'odz' : ''  }}
                                                {{ $order->status->status_name == 'RTS' ? 'rts' : ''  }}
                                                {{ $order->status->status_name == 'Detained' ? 'detained' : ''  }}
                                                ">{{ $order->status->status_name }}</span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="badge badge-sm cts-badge
                                                ">{{ $order->calltextstatus->cts_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sku_1 }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sku_2 }}</span>
                                            </td>
                                            {{-- <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->upseller }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->upsell_item }}</span>
                                            </td> --}}
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold text-capitalize">{{ $order->main_item }}</span>
                                            </td>
                                            <td class="text-end" style="padding-right: 1.5rem">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->price }}</span>
                                            </td>
                                            {{-- <td class="text-end" style="padding-right: 1.5rem">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->upsell_price }}</span>
                                            </td> --}}
                                            <td class="text-end" style="padding-right: 1.5rem">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->final_price }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->courier->courier_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->tracking_number }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->rts_tracking_number }}</span>
                                            </td>
                            
                                            <td class="align-middle position-sticky top-0 end-0 bg-white">
                                                <span class=" font-weight-bold text-xs px-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#editModal" wire:click="editOrder({{ $order->id }})" onMouseOver="this.style.color='#2d4491'" onMouseOut="this.style.color='#8392AB'" >
                                                    <i class="fa fa-solid fa-pencil"></i>
                                                </span>
                                                <span class=" font-weight-bold text-xs px-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="deleteConfirmation({{ $order->id }})" onMouseOver="this.style.color='#ea0606'" onMouseOut="this.style.color='#8392AB'" >
                                                    <i class="fa fa-solid fa-trash"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">No result</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Add Modal -->
            <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="orderStore">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sales_date" class="form-control-label">Sales Date</label>
                                    <input class="form-control" placeholder="mm/dd/yyyy" type="date" id="sales_date" wire:model="sales_date">
                                    @error('sales_date')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name" class="form-control-label">Customer Name</label>
                                    <input class="form-control" type="text" placeholder="Type customer name here" id="customer_name" wire:model="customer_name">
                                    @error('customer_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="page_name" class="form-control-label">Page</label>
                                    <input class="form-control" type="text" id="page_name" wire:model="page_name" placeholder="Type page name here">
                                    @error('page_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number" class="form-control-label">Number</label>
                                    <input class="form-control" type="number" id="number" wire:model="number" placeholder="+63-">
                                    @error('number')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="csr_name" class="form-control-label">CSR Name</label>
                                    <input class="form-control" type="text" id="csr_name" wire:model="csr_name" placeholder="Type CSR name here">
                                    @error('csr_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_landmark" class="form-control-label">Address Landmark</label>
                                    <input class="form-control" type="text" id="address_landmark" wire:model="address_landmark" placeholder="Purok/Street, Barangay, City, Province">
                                    @error('address_landmark')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="main_item" class="form-control-label">Main Item</label>
                                        <input class="form-control" type="text" id="main_item" wire:model="main_item" placeholder="Eg. Money Coin Ring">
                                        @error('main_item')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upseller" class="form-control-label">Upseller</label>
                                      <input class="form-control" type="text" id="upseller" wire:model="upseller" placeholder="Type upseller here">
                                      @error('upseller')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status" class="form-control-label">Status</label>
                                        <select class="form-select" wire:model="status_id">
                                            <option value="">Select Status</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cts_id" class="form-control-label">Call & Text Status</label>
                                        <select class="form-select" wire:model="cts_id">
                                            <option value="">Select Courier</option>
                                            @foreach ($calltextstatus as $cts)
                                                <option value="{{ $cts->id }}">{{ $cts->cts_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('cts_id')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_1" class="form-control-label">SKU 1</label>
                                        <input class="form-control" type="text" id="sku_1" wire:model="sku_1" placeholder="Eg. MCR 11">
                                        @error('sku_1')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upsell_item" class="form-control-label">Upsell Item</label>
                                      <input class="form-control" type="text" id="upsell_item" wire:model="upsell_item" placeholder="Eg. Old School Vans">
                                      @error('upsell_item')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tracking_number" class="form-control-label">Tracking #</label>
                                        <input class="form-control" type="text" id="tracking_number" wire:model="tracking_number" placeholder="Eg. P61181P1XRCEA">
                                        @error('tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rts_tracking_number" class="form-control-label">RTS Tracking #</label>
                                        <input class="form-control" type="text" id="rts_tracking_number" wire:model="rts_tracking_number" placeholder="Eg. P61181P1XRCEA">
                                        @error('rts_tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_2" class="form-control-label">SKU 2</label>
                                        <input class="form-control" type="text" id="sku_2" wire:model="sku_2" placeholder="Eg. MCE 8">
                                        @error('sku_2')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="price" class="form-control-label">Price</label>
                                    <input class="form-control" type="number" id="price" wire:model="price" placeholder="₱ 0.00">
                                    @error('price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="courier_id" class="form-control-label">Courier</label>
                                        <select class="form-select" wire:model="courier_id">
                                            <option value="">Select Courier</option>
                                            @foreach ($couriers as $courier)
                                                <option value="{{ $courier->id }}">{{ $courier->courier_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('courier_id')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_3" class="form-control-label">SKU 3</label>
                                        <input class="form-control" type="text" id="sku_3" wire:model="sku_3" placeholder="Eg. MCC 2">
                                        @error('sku_3')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="upsell_price" class="form-control-label">Upsell Price</label>
                                    <input class="form-control" type="number" id="upsell_price" wire:model="upsell_price" placeholder="₱ 0.00">
                                    @error('upsell_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes" class="form-control-label">Notes</label>
                                        <input class="form-control" type="text" id="notes" wire:model="notes" placeholder="Eg. No landmark">
                                        @error('notes')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_4" class="form-control-label">SKU 4</label>
                                        <input class="form-control" type="text" id="sku_4" wire:model="sku_4" placeholder="Eg. MCD 10">
                                        @error('sku_4')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="final_price" class="form-control-label">Final Price</label>
                                    <input class="form-control" type="number" id="final_price" wire:model="final_price" placeholder="₱ 0.00">
                                    @error('final_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary text-white" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-primary text-white">Save</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>


            <!-- Edit Modal -->
            <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="editOrderData">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sales_date" class="form-control-label">Sales Date</label>
                                    <input class="form-control" placeholder="mm/dd/yyyy" type="date" id="sales_date" wire:model="sales_date">
                                    @error('sales_date')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name" class="form-control-label">Customer Name</label>
                                    <input class="form-control" type="text" placeholder="Type customer name here" id="customer_name" wire:model="customer_name">
                                    @error('customer_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="page_name" class="form-control-label">Page</label>
                                    <input class="form-control" type="text" id="page_name" wire:model="page_name" placeholder="Type page name here">
                                    @error('page_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number" class="form-control-label">Number</label>
                                    <input class="form-control" type="number" id="number" wire:model="number" placeholder="+63-">
                                    @error('number')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="csr_name" class="form-control-label">CSR Name</label>
                                    <input class="form-control" type="text" id="csr_name" wire:model="csr_name" placeholder="Type CSR name here">
                                    @error('csr_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_landmark" class="form-control-label">Address Landmark</label>
                                    <input class="form-control" type="text" id="address_landmark" wire:model="address_landmark" placeholder="Purok/Street, Barangay, City, Province">
                                    @error('address_landmark')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="main_item" class="form-control-label">Main Item</label>
                                        <input class="form-control" type="text" id="main_item" wire:model="main_item" placeholder="Eg. Money Coin Ring">
                                        @error('main_item')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upseller" class="form-control-label">Upseller</label>
                                      <input class="form-control" type="text" id="upseller" wire:model="upseller" placeholder="Type upseller here">
                                      @error('upseller')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status" class="form-control-label">Status</label>
                                        <select class="form-select" wire:model="status_id">
                                            <option value="">Select Status</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cts_id" class="form-control-label">Call & Text Status</label>
                                        <select class="form-select" wire:model="cts_id">
                                            <option value="">Select Courier</option>
                                            @foreach ($calltextstatus as $cts)
                                                <option value="{{ $cts->id }}">{{ $cts->cts_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('cts_id')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_1" class="form-control-label">SKU 1</label>
                                        <input class="form-control" type="text" id="sku_1" wire:model="sku_1" placeholder="Eg. MCR 11">
                                        @error('sku_1')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upsell_item" class="form-control-label">Upsell Item</label>
                                      <input class="form-control" type="text" id="upsell_item" wire:model="upsell_item" placeholder="Eg. Old School Vans">
                                      @error('upsell_item')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tracking_number" class="form-control-label">Tracking #</label>
                                        <input class="form-control" type="text" id="tracking_number" wire:model="tracking_number" placeholder="Eg. P61181P1XRCEA">
                                        @error('tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rts_tracking_number" class="form-control-label">RTS Tracking #</label>
                                        <input class="form-control" type="text" id="rts_tracking_number" wire:model="rts_tracking_number" placeholder="Eg. P61181P1XRCEA">
                                        @error('rts_tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_2" class="form-control-label">SKU 2</label>
                                        <input class="form-control" type="text" id="sku_2" wire:model="sku_2" placeholder="Eg. MCE 8">
                                        @error('sku_2')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="price" class="form-control-label">Price</label>
                                    <input class="form-control" type="number" id="price" wire:model="price" placeholder="₱ 0.00">
                                    @error('price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="courier_id" class="form-control-label">Courier</label>
                                        <select class="form-select" wire:model="courier_id">
                                            <option value="">Select Courier</option>
                                            @foreach ($couriers as $courier)
                                                <option value="{{ $courier->id }}">{{ $courier->courier_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('courier_id')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_3" class="form-control-label">SKU 3</label>
                                        <input class="form-control" type="text" id="sku_3" wire:model="sku_3" placeholder="Eg. MCC 2">
                                        @error('sku_3')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="upsell_price" class="form-control-label">Upsell Price</label>
                                    <input class="form-control" type="number" id="upsell_price" wire:model="upsell_price" placeholder="₱ 0.00">
                                    @error('upsell_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes" class="form-control-label">Notes</label>
                                        <input class="form-control" type="text" id="notes" wire:model="notes" placeholder="Eg. No landmark">
                                        @error('notes')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sku_4" class="form-control-label">SKU 4</label>
                                        <input class="form-control" type="text" id="sku_4" wire:model="sku_4" placeholder="Eg. MCD 10">
                                        @error('sku_4')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="final_price" class="form-control-label">Final Price</label>
                                    <input class="form-control" type="number" id="final_price" wire:model="final_price" placeholder="₱ 0.00">
                                    @error('final_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary text-white" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-primary text-white">Save changes</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <p>Warning: This action cannot be undone!</p>
                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secondary text-white" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn bg-danger text-white" wire:click="deleteOrderData()">Delete</button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            

            <script>
                window.addEventListener('close-add-modal', event => {
                    $('#addModal').modal('hide');
                });

                window.addEventListener('close-edit-modal', event => {
                    $('#editModal').modal('hide');
                });

                window.addEventListener('close-delete-modal', event => {
                    $('#deleteModal').modal('hide');
                });
            </script>
        </div>



        <!-- Pagination -->
        <div class="d-flex justify-content-between">
            <form action="" method="GET" class="d-flex align-items-center" style="width: fit-content">
                <select class="form-control" style="width: fit-content" wire:model="perPage">
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                <label for="" class="fs-6 fw-normal" style="padding-left: 5px; padding-top: 5px; ">Per Page</label>
            </form>
            {!! $orders->links() !!}
        </div>
    </div>

</main>