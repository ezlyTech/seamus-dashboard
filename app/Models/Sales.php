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
        'final_price', 'notes', 'cts_id', 
        'courier_id', 'status_id', 
        'tracking_number', 'rts_tracking_number',
        'pickup_date', 'rts_returned_date'
    ];

    public function scopeSearch($query, $term) {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('number', 'like', $term)
                  ->orWhere('customer_name', 'like', $term)
                  ->orWhere('tracking_number', 'like', $term);
        });
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function calltextstatus() {
        return $this->belongsTo(CallTextStatus::class, 'cts_id', 'id');
    }

    public function courier() {
        return $this->belongsTo(Courier::class, 'courier_id', 'id');
    }
}
