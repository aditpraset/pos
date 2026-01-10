@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Outlet: Outlet Maju Jaya
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('manajemen_relasi.outlet') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar Outlet
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
                        <span class="avatar avatar-xl mb-3" style="background-image: url(https://placehold.co/128x128/E0E0E0/000000?text=Outlet)"></span>
                        <h3 class="m-0 text-truncate">Outlet Maju Jaya</h3>
                        <div class="text-secondary">Tipe: Salon</div>
                        <div class="mt-3">
                            <span class="badge bg-success me-1"></span> Aktif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Outlet</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">ID Outlet</div>
                                <div class="datagrid-content">OUTLET001</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Alamat</div>
                                <div class="datagrid-content">Jl. Raya No. 123, Jakarta</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nomor Telepon</div>
                                <div class="datagrid-content">+62 812-1122-3344</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Email</div>
                                <div class="datagrid-content">maju.jaya@example.com</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Sales PIC</div>
                                <div class="datagrid-content">Andi Wijaya</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Depo</div>
                                <div class="datagrid-content">Depo Jakarta</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Widget Kinerja Outlet --}}
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
                                    Rp 25.000.000
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
                                    Jumlah Kunjungan Sales (Tahun Ini)
                                </div>
                                <div class="text-secondary">
                                    12 Kunjungan
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
                                    Produk Terfavorit
                                </div>
                                <div class="text-secondary">
                                    Shampo Anti-Rontok
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Target & Pencapaian Outlet --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Target & Pencapaian Outlet</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Target Pembelian Tahunan</div>
                                <div class="datagrid-content">Rp 30.000.000</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pencapaian Pembelian Tahunan</div>
                                <div class="datagrid-content">Rp 25.000.000 (83.3%)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Target Kunjungan Sales (per Tahun)</div>
                                <div class="datagrid-content">15 Kunjungan</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pencapaian Kunjungan Sales (per Tahun)</div>
                                <div class="datagrid-content">12 Kunjungan (80%)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Program & Reward Outlet (Tier) --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Program & Reward Outlet</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tier Outlet</div>
                                <div class="datagrid-content">
                                    <span class="badge bg-yellow me-1"></span> Silver Tier
                                    <small class="text-secondary">(Target untuk Gold: Rp 50.000.000 pembelian tahunan)</small>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Progress ke Tier Berikutnya</div>
                                <div class="datagrid-content">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-yellow" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="visually-hidden">50% Complete</span>
                                        </div>
                                    </div>
                                    50%
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Program Aktif</div>
                                <div class="datagrid-content">Infinite Saving Salon (ISS)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Promo Aktif</div>
                                <div class="datagrid-content">Promo ISC 12+3 (hingga 31 Des 2025)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Riwayat Reward</div>
                                <div class="datagrid-content">
                                    <ul class="list-unstyled mb-0">
                                        <li>- Diskon Khusus 5% (Q1 2025)</li>
                                        <li>- Free Produk Sample (Nov 2024)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Outlet --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tren Pembelian Bulanan</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-outlet-purchase-monthly" style="height: 200px;">
                            <canvas id="outletPurchaseMonthlyChart"></canvas>
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
                        <div id="chart-outlet-product-category" style="height: 200px;">
                            <canvas id="outletProductCategoryChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daftar Sales Order Outlet --}}
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
                                        <td>SO001</td>
                                        <td>01 Juli 2025</td>
                                        <td>Rp 1.500.000</td>
                                        <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                        <td><a href="{{ route('operasional_sales.sales_order_detail', ['id' => 'SO001']) }}">Detail SO</a></td>
                                    </tr>
                                    <tr>
                                        <td>SO005</td>
                                        <td>20 Juni 2025</td>
                                        <td>Rp 2.000.000</td>
                                        <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                        <td><a href="{{ route('operasional_sales.sales_order_detail', ['id' => 'SO005']) }}">Detail SO</a></td>
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
        // Chart: Tren Pembelian Bulanan Outlet
        const outletPurchaseMonthlyCtx = document.getElementById('outletPurchaseMonthlyChart').getContext('2d');
        new Chart(outletPurchaseMonthlyCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Pembelian (Juta Rp)',
                    data: [2, 3, 2.5, 4, 3.5, 5, 4.8], // Contoh data
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
                        text: 'Tren Pembelian Bulanan'
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
        const outletProductCategoryCtx = document.getElementById('outletProductCategoryChart').getContext('2d');
        new Chart(outletProductCategoryCtx, {
            type: 'pie',
            data: {
                labels: ['Shampo', 'Kondisioner', 'Serum Rambut', 'Pewarna Rambut'],
                datasets: [{
                    data: [40, 30, 20, 10], // Contoh data persentase pembelian per kategori
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
