<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use Exception;

class OrderService
{
    /**
     * Generate unique order number with format: YYMMDDxxxxxxxx
     *
     * @return string
     */
    public function generateOrderNumber(): string
    {
        $date = now()->format('ymd');
        $lastOrder = Order::whereDate('created_at', today())
            ->orderBy('id', 'desc')
            ->first();

        if ($lastOrder) {
            $lastNumber = (int) substr($lastOrder->order_number, -8);
            $newNumber = str_pad($lastNumber + 1, 8, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '00000001';
        }

        return $date . $newNumber;
    }

    /**
     * Calculate order totals from order details
     *
     * @param array $orderDetails
     * @param float $discountAmount
     * @return array
     */
    public function calculateOrderTotals(array $orderDetails, float $discountAmount = 0): array
    {
        $totalQuantity = 0;
        $subTotal = 0;

        foreach ($orderDetails as $detail) {
            $quantity = $detail['quantity'];
            $price = $detail['price'];
            $totalQuantity += $quantity;
            $subTotal += ($quantity * $price);
        }

        $totalAmount = $subTotal - $discountAmount;

        return [
            'quantity' => $totalQuantity,
            'sub_total_amount' => $subTotal,
            'total_amount' => $totalAmount,
        ];
    }

    /**
     * Create order with order details in a transaction
     *
     * @param array $data
     * @return Order
     * @throws Exception
     */
    public function createOrder(array $data): Order
    {
        try {
            return DB::transaction(function () use ($data) {
                $orderDetails = $data['order_details'];
                $discountAmount = $data['discount_amount'] ?? 0;

                // Calculate totals
                $totals = $this->calculateOrderTotals($orderDetails, $discountAmount);

                // Create order
                $order = Order::create([
                    'status_id' => 2, // Default status: pending/new
                    'payment_method_id' => $data['payment_method_id'] ?? null,
                    'order_number' => $this->generateOrderNumber(),
                    'quantity' => $totals['quantity'],
                    'sub_total_amount' => $totals['sub_total_amount'],
                    'discount_amount' => $discountAmount,
                    'total_amount' => $totals['total_amount'],
                    'customer_name' => $data['customer_name'] ?? null,
                    'customer_phone' => $data['customer_phone'] ?? null,
                    'customer_address' => $data['customer_address'] ?? null,
                ]);

                // Create order details
                foreach ($orderDetails as $detail) {
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'product_id' => $detail['product_id'],
                        'quantity' => $detail['quantity'],
                        'price' => $detail['price'],
                        'total_amount' => $detail['quantity'] * $detail['price'],
                    ]);
                }

                return $order->load(['orderDetails.product', 'status', 'paymentMethod']);
            });
        } catch (Exception $e) {
            throw new Exception('Gagal membuat pesanan: ' . $e->getMessage());
        }
    }

    /**
     * Update order with order details in a transaction
     *
     * @param Order $order
     * @param array $data
     * @return Order
     * @throws Exception
     */
    public function updateOrder(Order $order, array $data): Order
    {
        try {
            return DB::transaction(function () use ($order, $data) {
                // Update order details if provided
                if (isset($data['order_details'])) {
                    $orderDetails = $data['order_details'];
                    $discountAmount = $data['discount_amount'] ?? $order->discount_amount;

                    // Calculate new totals
                    $totals = $this->calculateOrderTotals($orderDetails, $discountAmount);

                    // Delete existing order details
                    $order->orderDetails()->delete();

                    // Create new order details
                    foreach ($orderDetails as $detail) {
                        OrderDetail::create([
                            'order_id' => $order->id,
                            'product_id' => $detail['product_id'],
                            'quantity' => $detail['quantity'],
                            'price' => $detail['price'],
                            'total_amount' => $detail['quantity'] * $detail['price'],
                        ]);
                    }

                    // Update order with new totals
                    $data['quantity'] = $totals['quantity'];
                    $data['sub_total_amount'] = $totals['sub_total_amount'];
                    $data['total_amount'] = $totals['total_amount'];
                }

                // Update order
                $order->update(array_filter($data, function ($key) {
                    return in_array($key, [
                        'status_id',
                        'payment_method_id',
                        'quantity',
                        'sub_total_amount',
                        'discount_amount',
                        'total_amount',
                        'customer_name',
                        'customer_phone',
                        'customer_address',
                    ]);
                }, ARRAY_FILTER_USE_KEY));

                return $order->load(['orderDetails.product', 'status', 'paymentMethod']);
            });
        } catch (Exception $e) {
            throw new Exception('Gagal mengupdate pesanan: ' . $e->getMessage());
        }
    }

    /**
     * Delete order (soft delete)
     *
     * @param Order $order
     * @return bool
     * @throws Exception
     */
    public function deleteOrder(Order $order): bool
    {
        try {
            return DB::transaction(function () use ($order) {
                // Soft delete will cascade to order details via model events
                return $order->delete();
            });
        } catch (Exception $e) {
            throw new Exception('Gagal menghapus pesanan: ' . $e->getMessage());
        }
    }
}
