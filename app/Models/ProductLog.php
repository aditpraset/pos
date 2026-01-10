<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductLog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'added_quantity',
        'removed_quantity',
        'last_stock',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
