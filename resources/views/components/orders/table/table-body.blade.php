
<tbody>
    @if(!empty($dataSales))
        <tr>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->sales_date }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->page }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->csr_name }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->customer_name }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->number }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->address_landmark }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->main_item }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->sku_1 }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->sku_2 }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->sku_3 }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->sku_4 }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->upseller }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->upsell_item }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->price }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->upsell_price }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->final_price }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->notes }}</span>
            </td>
            <td class="align-middle text-sm">
                <span class="badge badge-sm bg-gradient-success">{{ $dataSales->call_text_status }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->shipper }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->courier }}</span>
            </td>
            <td class="align-middle text-sm">
                <span class="badge badge-sm bg-gradient-success">{{ $dataSales->status }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->tracking_number }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->pos }}</span>
            </td>
            <td>
                <span class="text-secondary text-xs font-weight-bold">{{ $dataSales->rts_tracking_number }}</span>
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