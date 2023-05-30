<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add New Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="sales_date" class="form-control-label">Sales Date</label>
                        <input class="form-control" placeholder="mm/dd/yyyy" type="date" id="sales_date" wire:model="sales_date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="customer_name" class="form-control-label">Customer Name</label>
                        <input class="form-control" type="text" placeholder="Type customer name here" id="customer_name" wire:model="customer_name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="page" class="form-control-label">Page</label>
                        <input class="form-control" type="text" id="page" wire:model="page">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="number" class="form-control-label">Number</label>
                        <input class="form-control" type="number" id="number" wire:model="number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="csr_name" class="form-control-label">CSR Name</label>
                        <input class="form-control" type="text" id="csr_name" wire:model="csr_name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="address_landmark" class="form-control-label">Address Landmark</label>
                        <input class="form-control" type="text" id="address_landmark" wire:model="address_landmark">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Main Item</label>
                            <input class="form-control" type="text" id="example-text-input" wire:model="">
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="upseller" class="form-control-label">Upseller</label>
                          <input class="form-control" type="text" id="upseller" wire:model="upseller">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="shipper" class="form-control-label">Shipper</label>
                            <input class="form-control" type="text" id="shipper" wire:model="shipper">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status" class="form-control-label">Status</label>
                            <input class="form-control" type="text" id="status" wire:model="status">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sku_1" class="form-control-label">SKU 1</label>
                            <input class="form-control" type="number" id="sku_1" wire:model="sku_1">
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="upsell_item" class="form-control-label">Upsell Item</label>
                          <input class="form-control" type="text" id="upsell_item" wire:model="upsell_item">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="courier" class="form-control-label">Courier</label>
                            <input class="form-control" type="text" id="courier" wire:model="courier">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="call_text_status" class="form-control-label">Call & Text Status</label>
                            <input class="form-control" type="text" id="call_text_status" wire:model="call_text_status">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sku_2" class="form-control-label">SKU 2</label>
                            <input class="form-control" type="number" id="sku_2" wire:model="sku_2">
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="price" class="form-control-label">Price</label>
                        <input class="form-control" type="number" id="price" wire:model="price">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pos" class="form-control-label">POS</label>
                            <input class="form-control" type="text" id="pos" wire:model="pos">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tracking_number" class="form-control-label">Tracking #</label>
                            <input class="form-control" type="number" id="tracking_number" wire:model="tracking_number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sku_3" class="form-control-label">SKU 3</label>
                            <input class="form-control" type="number" id="sku_3" wire:model="sku_3">
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="upsell_price" class="form-control-label">Upsell Price</label>
                        <input class="form-control" type="number" id="upsell_price" wire:model="upsell_price">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="notes" class="form-control-label">Notes</label>
                            <input class="form-control" type="text" id="notes" wire:model="notes">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rts_tracking_number" class="form-control-label">RTS Tracking #</label>
                            <input class="form-control" type="number" id="rts_tracking_number" wire:model="rts_tracking_number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sku_4" class="form-control-label">SKU 4</label>
                            <input class="form-control" type="number" id="sku_4" wire:model="sku_4">
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="final_price" class="form-control-label">Final Price</label>
                        <input class="form-control" type="number" id="final_price" wire:model="final_price">
                      </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn bg-gradient-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>