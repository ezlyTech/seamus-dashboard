<?php

namespace App\Imports;

use App\Models\Sales;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sales([
            'sales_date' => $row['sales_date'],
            'page_name' => $row['page_name'],
            'csr_name' => $row['csr_name'],
            'customer_name' => $row['customer_name'],
            'number' => $row['number'],
            'address_landmark' => $row['address_landmark'],
            'main_item' => $row['main_item'],
            'sku_1' => $row['sku_1'],
            'sku_2' => $row['sku_2'],
            'sku_3' => $row['sku_3'],
            'sku_4' => $row['sku_4'],
            'upseller' => $row['upseller'],
            'upsell_item' => $row['upsell_item'],
            'price' => $row['price'],
            'upsell_price' => $row['upsell_price'],
            'final_price' => $row['final_price'],
            'notes' => $row['notes'],
            'cts_id' => $row['cts_id'],
            // 'shipper' => $row['shipper'],
            'courier_id' => $row['courier_id'],
            'status_id' => $row['status_id'],
            'tracking_number' => $row['tracking_number'],
            // 'pos' => $row['pos'],
            'rts_tracking_number' => $row['rts_tracking_number']
        ]);
    }
}
