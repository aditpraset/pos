@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Laporan Produk
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Export Data
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Produk --}}
            <div class="row row-cards mb-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 7v4l3 3" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total Produk Aktif
                                    </div>
                                    <div class="text-secondary">
                                        150 Produk
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-success text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Produk Terlaris (Bulan Ini)
                                    </div>
                                    <div class="text-secondary">
                                        Beras Premium 5kg
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-warning text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Produk Stok Rendah
                                    </div>
                                    <div class="text-secondary">
                                        5 Produk
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-info text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total Nilai Stok
                                    </div>
                                    <div class="text-secondary">
                                        Rp 120.000.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Produk --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Penjualan Produk per Bulan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-product-sales-monthly" style="height: 200px;">
                                <canvas id="productSalesMonthlyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Stok Produk per Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-product-stock-category" style="height: 200px;">
                                <canvas id="productStockCategoryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Filter Periode</label>
                        <div class="input-icon">
                            <input type="text" class="form-control daterange" value="01/07/2025 - 31/07/2025">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                    <path d="M16 3v4" />
                                    <path d="M8 3v4" />
                                    <path d="M4 11h16" />
                                    <path d="M11 15h1" />
                                    <path d="M12 15v3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Filter Berdasarkan Kategori Produk</label>
                        <select class="form-select">
                            <option>Semua Kategori</option>
                            <option>Bahan Pokok</option>
                            <option>Minyak & Lemak</option>
                            <option>Gula & Pemanis</option>
                            <option>Telur & Susu</option>
                            <option>Bumbu Dapur</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="productReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Stok Tersedia</th>
                                    <th>Total Terjual (Unit)</th>
                                    <th>Total Penjualan (Rp)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Beras Premium 5kg</td>
                                    <td>Bahan Pokok</td>
                                    <td>250</td>
                                    <td>150</td>
                                    <td>Rp 15.000.000</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail Produk</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Minyak Goreng 2L</td>
                                    <td>Minyak & Lemak</td>
                                    <td>180</td>
                                    <td>100</td>
                                    <td>Rp 8.500.000</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail Produk</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gula Pasir 1kg</td>
                                    <td>Gula & Pemanis</td>
                                    <td>70</td>
                                    <td>30</td>
                                    <td>Rp 4.500.000</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail Produk</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Inisialisasi DataTables setelah dokumen siap
            $(document).ready(function() {
                $('#productReportTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Inisialisasi Chart.js untuk Penjualan Produk per Bulan
                const productSalesMonthlyCtx = document.getElementById('productSalesMonthlyChart').getContext('2d');
                new Chart(productSalesMonthlyCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                        datasets: [{
                            label: 'Unit Terjual',
                            data: [500, 600, 550, 700, 650, 800, 750], // Contoh data
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
                                text: 'Penjualan Produk per Bulan'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Stok Produk per Kategori
                const productStockCategoryCtx = document.getElementById('productStockCategoryChart').getContext('2d');
                new Chart(productStockCategoryCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Bahan Pokok', 'Minyak & Lemak', 'Gula & Pemanis', 'Telur & Susu', 'Bumbu Dapur'],
                        datasets: [{
                            label: 'Stok Tersedia (Unit)',
                            data: [500, 300, 150, 200, 100], // Contoh data
                            backgroundColor: ['#28a745', '#ffc107', '#17a2b8', '#dc3545', '#6c757d'],
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
                                text: 'Stok Produk per Kategori'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    @endpush
@endsection
