@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Detail Penjualan: #{{ $order->order_number }}
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                            </svg>
                            Cetak Invoice
                        </button>
                        <a href="{{ route('reports.penjualan') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card card-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p class="h3">Info Pesanan</p>
                            <address>
                                <strong>No. Order:</strong> {{ $order->order_number }}<br>
                                <strong>Tanggal:</strong> {{ $order->created_at->format('d F Y, H:i') }}<br>
                                <strong>Status:</strong>
                                <span
                                    class="badge bg-{{ $order->status_id == 1 ? 'warning' : ($order->status_id == 2 ? 'success' : 'danger') }} me-1"></span>
                                {{ $order->status->name ?? 'Unknown' }}<br>
                                <strong>Metode Pembayaran:</strong> {{ $order->paymentMethod->name ?? '-' }}
                            </address>
                        </div>
                        <div class="col-6 text-end">
                            <p class="h3">Info Pelanggan</p>
                            <address>
                                <strong>{{ $order->customer_name }}</strong><br>
                                {{ $order->customer_address ?? 'Alamat tidak tersedia' }}<br>
                                {{ $order->customer_phone ?? 'No. Telp tidak tersedia' }}
                            </address>
                        </div>
                        <div class="col-12 my-5">
                            <h1>Invoice #{{ $order->order_number }}</h1>
                        </div>
                    </div>
                    <table class="table table-transparent table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 1%"></th>
                                <th>Produk</th>
                                <th class="text-center" style="width: 15%">Qty</th>
                                <th class="text-end" style="width: 15%">Harga Satuan</th>
                                <th class="text-end" style="width: 20%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetails as $index => $detail)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        <p class="strong mb-1">{{ $detail->product->name }}</p>
                                        <div class="text-secondary">{{ $detail->product->code ?? '-' }} |
                                            {{ $detail->product->uom->name ?? 'Unit' }}</div>
                                    </td>
                                    <td class="text-center">
                                        {{ $detail->quantity }}
                                    </td>
                                    <td class="text-end">Rp {{ number_format($detail->price, 0, ',', '.') }}</td>
                                    <td class="text-end">Rp {{ number_format($detail->total_amount, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" class="strong text-end">Subtotal</td>
                                <td class="text-end">Rp {{ number_format($order->sub_total_amount, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="strong text-end">Diskon</td>
                                <td class="text-end">Rp {{ number_format($order->discount_amount, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="font-weight-bold text-uppercase text-end">Total Bayar</td>
                                <td class="font-weight-bold text-end">Rp
                                    {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-secondary text-center mt-5">Terima kasih telah berbelanja!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
