{{-- <div> --}}
    {{-- @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
        {{ session('message') }}
        </div>
    @endif --}}
    <tbody>
        @if(!empty($order))
            <tr>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $order->sales_date }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $order->page }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->csr_name }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->customer_name }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->number }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->address_landmark }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->main_item }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->sku_1 }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->sku_2 }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->sku_3 }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->sku_4 }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->upseller }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->upsell_item }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->price }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->upsell_price }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->final_price }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->notes }}</span>
                </td>
                <td class="align-middle text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{ $sales->call_text_status }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->shipper }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->courier }}</span>
                </td>
                <td class="align-middle text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{ $sales->status }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->tracking_number }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->pos }}</span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $sales->rts_tracking_number }}</span>
                </td>

                <td class="align-middle position-sticky top-0 end-0 bg-white">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs px-1" data-toggle="tooltip" data-original-title="Edit user">
                        <i class="fa fa-solid fa-pencil"></i>
                    </a>
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs px-1" data-toggle="tooltip" data-original-title="View user">
                        <i class="fa fa-regular fa-eye"></i>
                    </a>
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs px-1" data-toggle="tooltip" data-original-title="Delete user">
                        <i class="fa fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endif
    </tbody>
{{-- </div> --}}
{{-- <div>
    <p>agoi</p>
</div> --}}