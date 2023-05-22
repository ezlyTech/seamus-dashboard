<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'sales_date',
        'page',
        'csr_name',
        'customer_name',
        'number',
        'address_landmark',
        'main_item',
        'sku_1',
        'sku_2',
        'sku_3',
        'sku_4',
        'upseller',
        'upsell_item',
        'price',
        'upsell_price',
        'final_price',
        'notes',
        'call_text_status',
        'shipper',
        'courier',
        'status',
        'tracking_number',
        'pos',
        'rts_tracking_number'
    ];
}
