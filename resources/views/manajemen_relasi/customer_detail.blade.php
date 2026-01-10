@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Customer: Kaiya Calzoni
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('manajemen_relasi.customer') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-4">
                <div class="card card-md">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xl mb-3" style="background-image: url(https://placehold.co/128x128/E0E0E0/000000?text=Customer)"></span>
                        <h3 class="m-0 text-truncate">Kaiya Calzoni</h3>
                        <div class="text-secondary">Salon Cantik Berseri</div>
                        <div class="mt-3">
                            <span class="badge bg-success me-1"></span> Aktif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Customer</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">ID Customer</div>
                                <div class="datagrid-content">CUST001</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nama Outlet</div>
                                <div class="datagrid-content">Salon Cantik Berseri</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Alamat</div>
                                <div class="datagrid-content">Jl. Anggrek No. 5, Jakarta Barat</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nomor Telepon</div>
                                <div class="datagrid-content">+62 813-5566-7788</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Email</div>
                                <div class="datagrid-content">kaiya.calzoni@example.com</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Sales PIC</div>
                                <div class="datagrid-content">Andi Wijaya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Widget Kinerja Customer --}}
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7v4l3 3" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Pembelian (Tahun Ini)
                                </div>
                                <div class="text-secondary">
                                    Rp 20.000.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-success text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Jumlah Transaksi (Tahun Ini)
                                </div>
                                <div class="text-secondary">
                                    8 Transaksi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-info text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M12 12v9" /><path d="M15 15l-3 3l-3 -3" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Produk Paling Sering Dibeli
                                </div>
                                <div class="text-secondary">
                                    Pewarna Rambut Profesional
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Target & Pencapaian Customer --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Target & Pencapaian Customer</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Target Pembelian Tahunan</div>
                                <div class="datagrid-content">Rp 25.000.000</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pencapaian Pembelian Tahunan</div>
                                <div class="datagrid-content">Rp 20.000.000 (80%)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Target Transaksi Tahunan</div>
                                <div class="datagrid-content">10 Transaksi</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pencapaian Transaksi Tahunan</div>
                                <div class="datagrid-content">8 Transaksi (80%)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Program & Reward Customer (Tier) --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Program & Reward Customer</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tier Customer</div>
                                <div class="datagrid-content">
                                    <span class="badge bg-blue me-1"></span> Bronze Tier
                                    <small class="text-secondary">(Target untuk Silver: Rp 30.000.000 pembelian tahunan)</small>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Progress ke Tier Berikutnya</div>
                                <div class="datagrid-content">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-blue" style="width: 66%" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">
                                            <span class="visually-hidden">66% Complete</span>
                                        </div>
                                    </div>
                                    66%
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Program Aktif</div>
                                <div class="datagrid-content">Inaura Salon Community (ISC)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Promo Aktif</div>
                                <div class="datagrid-content">Diskon Reguler Salon Cash/COD 10%</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Riwayat Reward</div>
                                <div class="datagrid-content">
                                    <ul class="list-unstyled mb-0">
                                        <li>- Poin Loyalitas x2 (Feb 2025)</li>
                                        <li>- Voucher Diskon Rp 50.000 (Jan 2025)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Customer --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tren Pembelian Bulanan Customer</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-customer-purchase-monthly" style="height: 200px;">
                            <canvas id="customerPurchaseMonthlyChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distribusi Pembelian per Kategori Produk</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-customer-product-category" style="height: 200px;">
                            <canvas id="customerProductCategoryChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daftar Sales Order Customer --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Sales Order</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No. SO</th>
                                        <th>Tanggal Order</th>
                                        <th>Total Nilai</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SO010</td>
                                        <td>05 Juli 2025</td>
                                        <td>Rp 1.200.000</td>
                                        <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                        <td><a href="{{ route('operasional_sales.sales_order_detail', ['id' => 'SO010']) }}">Detail SO</a></td>
                                    </tr>
                                    <tr>
                                        <td>SO007</td>
                                        <td>28 Juni 2025</td>
                                        <td>Rp 2.500.000</td>
                                        <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                        <td><a href="{{ route('operasional_sales.sales_order_detail', ['id' => 'SO007']) }}">Detail SO</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Chart: Tren Pembelian Bulanan Customer
        const customerPurchaseMonthlyCtx = document.getElementById('customerPurchaseMonthlyChart').getContext('2d');
        new Chart(customerPurchaseMonthlyCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Pembelian (Juta Rp)',
                    data: [1.5, 1.8, 1.7, 2.0, 1.9, 2.2, 2.0], // Contoh data
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Tren Pembelian Bulanan Customer'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Chart: Distribusi Pembelian per Kategori Produk
        const customerProductCategoryCtx = document.getElementById('customerProductCategoryChart').getContext('2d');
        new Chart(customerProductCategoryCtx, {
            type: 'pie',
            data: {
                labels: ['Pewarna Rambut', 'Shampo', 'Kondisioner', 'Serum Rambut'],
                datasets: [{
                    data: [35, 25, 20, 20], // Contoh data persentase pembelian per kategori
                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Distribusi Pembelian per Kategori Produk'
                    }
                }
            }
        });
    });
</script>
@endpush
@endsection
