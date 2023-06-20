<main class="main-content">
    <div class="container-fluid py-4">
        <div>
            <!-- Filters -->
            <div class="row">
                <div class="col-12">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Status</label>
                                <select wire:model="byStatus" class="form-control">
                                    <option value="">Select Status</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Search</label>
                                <input type="text" class="form-control" wire:model.debounce.350ms="search" placeholder="Type to search...">
                            </div>
                            <div class="col-md-2">
                                <label for="">Order By</label>
                                <select class="form-control" wire:model="orderBy">
                                    <option value="page_name">Page Name</option>
                                    <option value="csr_name">CSR Name</option>
                                    <option value="customer_name">Customer Name</option>
                                    <option value="address_landmark">Address Landmark</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>


            <!-- Table -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Sales table</h6>
                    <button class="btn btn-icon btn-3 btn-info" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                      <span class="btn-inner--icon pe-1"><i class="fa fa-plus"></i></span>
                      <span class="btn-inner--text">Add new</span>
                    </button>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 table-striped table-hover" style="border-collapse: collapse">
                            <thead class="position-relative">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sales Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Page</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CSR Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address Landmark</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Main Item</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SKU 1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SKU 2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SKU 3</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SKU 4</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Upseller</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Upsell Item</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Upsell Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Final Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shipper</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Courier</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Call & Text Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tracking Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RTS Tracking Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">POS</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Notes</th>
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
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->page_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->csr_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->customer_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->address_landmark }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->main_item }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sku_1 }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sku_2 }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sku_3 }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sku_4 }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->upseller }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->upsell_item }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->price }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->upsell_price }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->final_price }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->shipper }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->courier }}</span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $order->status }}</span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $order->call_text_status }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->number }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->tracking_number }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->rts_tracking_number }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->pos }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->notes }}</span>
                                            </td>
                            
                                            <td class="align-middle position-sticky top-0 end-0 bg-white">
                                                <span class="text-secondary font-weight-bold text-xs px-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#editModal" wire:click="editOrder({{ $order->id }})">
                                                    <i class="fa fa-solid fa-pencil"></i>
                                                </span>
                                                <span class="text-secondary font-weight-bold text-xs px-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="deleteConfirmation({{ $order->id }})">
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
                                    <input class="form-control" type="text" id="page_name" wire:model="page_name">
                                    @error('page_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number" class="form-control-label">Number</label>
                                    <input class="form-control" type="number" id="number" wire:model="number">
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
                                    <input class="form-control" type="text" id="csr_name" wire:model="csr_name">
                                    @error('csr_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_landmark" class="form-control-label">Address Landmark</label>
                                    <input class="form-control" type="text" id="address_landmark" wire:model="address_landmark">
                                    @error('address_landmark')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="main_item" class="form-control-label">Main Item</label>
                                        <input class="form-control" type="text" id="main_item" wire:model="main_item">
                                        @error('main_item')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upseller" class="form-control-label">Upseller</label>
                                      <input class="form-control" type="text" id="upseller" wire:model="upseller">
                                      @error('upseller')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="shipper" class="form-control-label">Shipper</label>
                                        <input class="form-control" type="text" id="shipper" wire:model="shipper">
                                        @error('shipper')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status" class="form-control-label">Status</label>
                                        <select class="form-control">
                                            <option value="">Select Status</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_1" class="form-control-label">SKU 1</label>
                                        <input class="form-control" type="number" id="sku_1" wire:model="sku_1">
                                        @error('sku_1')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upsell_item" class="form-control-label">Upsell Item</label>
                                      <input class="form-control" type="text" id="upsell_item" wire:model="upsell_item">
                                      @error('upsell_item')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="courier" class="form-control-label">Courier</label>
                                        <input class="form-control" type="text" id="courier" wire:model="courier">
                                        @error('courier')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="call_text_status" class="form-control-label">Call & Text Status</label>
                                        <input class="form-control" type="text" id="call_text_status" wire:model="call_text_status">
                                        @error('call_text_status')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_2" class="form-control-label">SKU 2</label>
                                        <input class="form-control" type="number" id="sku_2" wire:model="sku_2">
                                        @error('sku_2')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="price" class="form-control-label">Price</label>
                                    <input class="form-control" type="number" id="price" wire:model="price">
                                    @error('price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pos" class="form-control-label">POS</label>
                                        <input class="form-control" type="text" id="pos" wire:model="pos">
                                        @error('pos')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tracking_number" class="form-control-label">Tracking #</label>
                                        <input class="form-control" type="number" id="tracking_number" wire:model="tracking_number">
                                        @error('tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_3" class="form-control-label">SKU 3</label>
                                        <input class="form-control" type="number" id="sku_3" wire:model="sku_3">
                                        @error('sku_3')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="upsell_price" class="form-control-label">Upsell Price</label>
                                    <input class="form-control" type="number" id="upsell_price" wire:model="upsell_price">
                                    @error('upsell_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="notes" class="form-control-label">Notes</label>
                                        <input class="form-control" type="text" id="notes" wire:model="notes">
                                        @error('notes')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rts_tracking_number" class="form-control-label">RTS Tracking #</label>
                                        <input class="form-control" type="number" id="rts_tracking_number" wire:model="rts_tracking_number">
                                        @error('rts_tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_4" class="form-control-label">SKU 4</label>
                                        <input class="form-control" type="number" id="sku_4" wire:model="sku_4">
                                        @error('sku_4')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="final_price" class="form-control-label">Final Price</label>
                                    <input class="form-control" type="number" id="final_price" wire:model="final_price">
                                    @error('final_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-gradient-primary">Save changes</button>
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
                        <h5 class="modal-title" id="editModalLabel">Edit </h5>
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
                                    <input class="form-control" type="text" id="page_name" wire:model="page_name">
                                    @error('page_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number" class="form-control-label">Number</label>
                                    <input class="form-control" type="number" id="number" wire:model="number">
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
                                    <input class="form-control" type="text" id="csr_name" wire:model="csr_name">
                                    @error('csr_name')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_landmark" class="form-control-label">Address Landmark</label>
                                    <input class="form-control" type="text" id="address_landmark" wire:model="address_landmark">
                                    @error('address_landmark')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="main_item" class="form-control-label">Main Item</label>
                                        <input class="form-control" type="text" id="main_item" wire:model="main_item">
                                        @error('main_item')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upseller" class="form-control-label">Upseller</label>
                                      <input class="form-control" type="text" id="upseller" wire:model="upseller">
                                      @error('upseller')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="shipper" class="form-control-label">Shipper</label>
                                        <input class="form-control" type="text" id="shipper" wire:model="shipper">
                                        @error('shipper')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status" class="form-control-label">Status</label>
                                        <input class="form-control" type="text" id="status" wire:model="status">
                                        @error('status')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_1" class="form-control-label">SKU 1</label>
                                        <input class="form-control" type="number" id="sku_1" wire:model="sku_1">
                                        @error('sku_1')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="upsell_item" class="form-control-label">Upsell Item</label>
                                      <input class="form-control" type="text" id="upsell_item" wire:model="upsell_item">
                                      @error('upsell_item')
                                          <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="courier" class="form-control-label">Courier</label>
                                        <input class="form-control" type="text" id="courier" wire:model="courier">
                                        @error('courier')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="call_text_status" class="form-control-label">Call & Text Status</label>
                                        <input class="form-control" type="text" id="call_text_status" wire:model="call_text_status">
                                        @error('call_text_status')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_2" class="form-control-label">SKU 2</label>
                                        <input class="form-control" type="number" id="sku_2" wire:model="sku_2">
                                        @error('sku_2')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="price" class="form-control-label">Price</label>
                                    <input class="form-control" type="number" id="price" wire:model="price">
                                    @error('price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pos" class="form-control-label">POS</label>
                                        <input class="form-control" type="text" id="pos" wire:model="pos">
                                        @error('pos')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tracking_number" class="form-control-label">Tracking #</label>
                                        <input class="form-control" type="number" id="tracking_number" wire:model="tracking_number">
                                        @error('tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_3" class="form-control-label">SKU 3</label>
                                        <input class="form-control" type="number" id="sku_3" wire:model="sku_3">
                                        @error('sku_3')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="upsell_price" class="form-control-label">Upsell Price</label>
                                    <input class="form-control" type="number" id="upsell_price" wire:model="upsell_price">
                                    @error('upsell_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="notes" class="form-control-label">Notes</label>
                                        <input class="form-control" type="text" id="notes" wire:model="notes">
                                        @error('notes')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rts_tracking_number" class="form-control-label">RTS Tracking #</label>
                                        <input class="form-control" type="number" id="rts_tracking_number" wire:model="rts_tracking_number">
                                        @error('rts_tracking_number')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="sku_4" class="form-control-label">SKU 4</label>
                                        <input class="form-control" type="number" id="sku_4" wire:model="sku_4">
                                        @error('sku_4')
                                            <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="final_price" class="form-control-label">Final Price</label>
                                    <input class="form-control" type="number" id="final_price" wire:model="final_price">
                                    @error('final_price')
                                        <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-gradient-primary">Save changes</button>
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
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn bg-danger" wire:click="deleteOrderData()">Delete</button>
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