{{-- <div>
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
                    @forelse ($dataSales as $key => $orders)
                        <livewire:orders.table-body :order="$orders" :wire:key="$key" />
                    @empty
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">No result</p>
                            </td>
                        </tr>
                    @endforelse
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
    <!-- Modal -->
    <livewire:orders.modal.add-modal />
</div> --}}
