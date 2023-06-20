<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'sales_date', 'page_name', 'csr_name', 
        'customer_name', 'number', 'address_landmark', 
        'main_item', 'sku_1', 'sku_2', 
        'sku_3', 'sku_4', 'upseller', 
        'upsell_item', 'price', 'upsell_price', 
        'final_price', 'notes', 'call_text_status', 
        'shipper', 'courier', 'status_id', 
        'tracking_number', 'pos', 'rts_tracking_number'
    ];

    public function scopeSearch($query, $term) {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('page_name', 'like', $term)
                  ->orWhere('csr_name', 'like', $term);
        });
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
