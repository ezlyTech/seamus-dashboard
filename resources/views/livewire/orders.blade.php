<main class="main-content">
    <div class="container-fluid py-4">
        <div>
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
                        <table class="table align-items-center mb-0">
                            <thead class="position-relative">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sales Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Page</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CSR Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Notes</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Call & Text Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shipper</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Courier</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tracking Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">POS</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RTS Tracking Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder position-sticky top-0 end-0 bg-white text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ( $orders->count() > 0 )
                                    @foreach ( $orders as $order )
                                        <tr>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->sales_date }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->page }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->csr_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->customer_name }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->number }}</span>
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
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->notes }}</span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $order->call_text_status }}</span>
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
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->tracking_number }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->pos }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ $order->rts_tracking_number }}</span>
                                            </td>
                            
                                            <td class="align-middle position-sticky top-0 end-0 bg-white">
                                                <button class="text-secondary font-weight-bold text-xs px-1" data-bs-toggle="modal" data-bs-target="#editModal" wire:click="editOrder({{ $order->id }})">
                                                    <i class="fa fa-solid fa-pencil"></i>
                                                </button>
                                                <button class="text-secondary font-weight-bold text-xs px-1" data-toggle="tooltip" data-original-title="View user">
                                                    <i class="fa fa-regular fa-eye"></i>
                                                </button>
                                                <button class="text-secondary font-weight-bold text-xs px-1" data-toggle="tooltip" data-original-title="Delete user">
                                                    <i class="fa fa-solid fa-trash"></i>
                                                </button>
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
          
            <!-- Modal -->
            <livewire:orders.modal.add-modal />
            <livewire:orders.modal.edit-modal />
        </div>
    </div>
</main>