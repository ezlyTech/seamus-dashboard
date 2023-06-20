<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

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
