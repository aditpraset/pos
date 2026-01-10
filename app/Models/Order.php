<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status_id',
        'payment_method_id',
        'order_number',
        'quantity',
        'sub_total_amount',
        'discount_amount',
        'total_amount',
        'customer_name',
        'customer_phone',
        'customer_address',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
