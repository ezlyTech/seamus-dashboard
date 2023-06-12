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
                        <label for="page" class="form-control-label">Page</label>
                        <input class="form-control" type="text" id="page" wire:model="page">
                        @error('page')
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
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

{{-- <script>
    window.addEventListener('close-modal', event => {
        $('#addModal').modal('hide');
    });
</script> --}}