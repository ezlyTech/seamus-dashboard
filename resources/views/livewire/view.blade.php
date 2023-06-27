<div class="main-content">
    <div class="container-fluid py-4 col-md-6 bg-white rounded mb-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <h4>{{ $order->customer_name }}</h4>
                <span class="mx-2 badge badge-sm 
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
                <span class="badge badge-sm cts-badge">{{ $order->calltextstatus->cts_name }}</span>
            </div>
            <h6>{{ $order->sales_date }}</h6>
        </div>

        <hr>

        <div class="row py-3">
            <div class="col-md-4">
                <p class="m-0 small">Page:</p>
                @if($order->page_name)
                    <h6>{{ $order->page_name }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">CSR Name:</p>
                @if($order->csr_name)
                    <h6>{{ $order->csr_name }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">Phone Number:</p>
                @if($order->number)
                    <h6>{{ $order->number }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-4">
                <p class="m-0 small">Main Item:</p>
                @if($order->main_item)
                    <h6>{{ $order->main_item }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">Tracking #:</p>
                @if($order->tracking_number)
                    <h6>{{ $order->tracking_number }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">RTS Tracking #:</p>
                @if($order->rts_tracking_number)
                    <h6>{{ $order->rts_tracking_number }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-4">
                <p class="m-0 small">Upsell Item:</p>
                @if($order->upsell_item)
                    <h6>{{ $order->upsell_item }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">Upseller:</p>
                @if($order->upseller)
                    <h6>{{ $order->upseller }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">Courier:</p>
                @if($order->courier->courier_name)
                    <h6>{{ $order->courier->courier_name }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-4">
                <p class="m-0 small">Price:</p>
                @if($order->price)
                    <h6>{{ $order->price }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">Upsell Price:</p>
                @if($order->upsell_price)
                    <h6>{{ $order->upsell_price }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-4">
                <p class="m-0 small">Final Price:</p>
                @if($order->final_price)
                    <h6>{{ $order->final_price }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-3">
                <p class="m-0 small">SKU 1:</p>
                @if($order->sku_1)
                    <h6>{{ $order->sku_1 }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-3">
                <p class="m-0 small">SKU 2:</p>
                @if($order->sku_2)
                    <h6>{{ $order->sku_2 }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-3">
                <p class="m-0 small">SKU 3:</p>
                @if($order->sku_3)
                    <h6>{{ $order->sku_3 }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-3">
                <p class="m-0 small">SKU 4:</p>
                @if($order->sku_4)
                    <h6>{{ $order->sku_4 }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-6">
                <p class="m-0 small">Address Landmark:</p>
                @if($order->address_landmark)
                    <h6>{{ $order->address_landmark }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
            <div class="col-md-6">
                <p class="m-0 small">Notes:</p>
                @if($order->notes)
                    <h6>{{ $order->notes }}</h6>
                @else
                    <h6>---</h6>
                @endif
            </div>
        </div>

    </div>
</div>