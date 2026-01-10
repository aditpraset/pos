@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Laporan Penjualan
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
            {{-- Widget untuk Ringkasan Data Penjualan --}}
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
                                        Total Penjualan Bulan Ini
                                    </div>
                                    <div class="text-secondary">
                                        Rp 25.000.000
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
                                        Rata-rata Penjualan Harian
                                    </div>
                                    <div class="text-secondary">
                                        Rp 833.333
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
                                        Jumlah Transaksi
                                    </div>
                                    <div class="text-secondary">
                                        50 Transaksi
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
                                        Produk Terjual
                                    </div>
                                    <div class="text-secondary">
                                        1200 Unit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Penjualan --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tren Penjualan Bulanan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-sales-trend" style="height: 200px;">
                                <canvas id="salesTrendChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Penjualan per Kategori Produk</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-sales-category" style="height: 200px;">
                                <canvas id="salesCategoryChart"></canvas>
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
                    <div class="table-responsive">
                        <table id="salesReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No. SO</th>
                                    <th>Tanggal</th>
                                    <th>GPK</th>
                                    <th>RPK</th>
                                    <th>Total Nilai</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SO001</td>
                                    <td>01 Juli 2025</td>
                                    <td>GPK Jakarta</td>
                                    <td>RPK001</td>
                                    <td>Rp 1.500.000</td>
                                    <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                    <td>
                                        <a href="#"
                                            class="btn btn-info btn-sm">Detail SO</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SO002</td>
                                    <td>02 Juli 2025</td>
                                    <td>GPK Surabaya</td>
                                    <td>RPK002</td>
                                    <td>Rp 2.000.000</td>
                                    <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                    <td>
                                        <a href="#"
                                            class="btn btn-info btn-sm">Detail SO</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SO004</td>
                                    <td>01 Juli 2025</td>
                                    <td>GPK Bandung</td>
                                    <td>RPK004</td>
                                    <td>Rp 3.200.000</td>
                                    <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                    <td>
                                        <a href="#"
                                            class="btn btn-info btn-sm">Detail SO</a>
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
                $('#salesReportTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Inisialisasi Chart.js untuk Tren Penjualan Bulanan
                const salesTrendCtx = document.getElementById('salesTrendChart').getContext('2d');
                new Chart(salesTrendCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                        datasets: [{
                            label: 'Penjualan (Juta Rp)',
                            data: [10, 15, 12, 18, 20, 22, 25], // Contoh data
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
                                text: 'Tren Penjualan Bulanan'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Penjualan per Kategori Produk
                const salesCategoryCtx = document.getElementById('salesCategoryChart').getContext('2d');
                new Chart(salesCategoryCtx, {
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
                                position: 'top',
                            },
                            title: {
                                display: false,
                                text: 'Penjualan per Kategori Produk'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Inisialisasi Date Range Picker (membutuhkan library tambahan seperti Litepicker atau Moment.js + Daterangepicker)
                // Untuk demo ini, ini hanya placeholder visual.
                // Anda perlu menambahkan library ini di layouts/app.blade.php jika ingin fungsional.
                // Contoh dengan Litepicker (jika sudah diinstal):
                // new Litepicker({
                //     element: document.querySelector('.daterange'),
                //     singleMode: false,
                //     format: 'DD/MM/YYYY'
                // });
            });
        </script>
    @endpush
@endsection
