@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Laporan Customer
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
            {{-- Widget untuk Ringkasan Data Customer --}}
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
                                        Total Outlet/Customer
                                    </div>
                                    <div class="text-secondary">
                                        500 Outlet
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
                                        Customer Aktif
                                    </div>
                                    <div class="text-secondary">
                                        450 Customer
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
                                        Customer Baru (Bulan Ini)
                                    </div>
                                    <div class="text-secondary">
                                        15 Customer
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
                                        Top Customer (Bulan Ini)
                                    </div>
                                    <div class="text-secondary">
                                        Outlet Maju Jaya
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Customer --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customer Berdasarkan Status</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-customer-status" style="height: 200px;">
                                <canvas id="customerStatusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Top 10 Customer Berdasarkan Penjualan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-top-customers" style="height: 200px;">
                                <canvas id="topCustomersChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Filter Periode Penjualan</label>
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
                        <label class="form-label">Filter Berdasarkan Status Customer</label>
                        <select class="form-select">
                            <option>Semua Status</option>
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                            <option>Baru</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="customerReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Nama Outlet/Customer</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Total Pembelian</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Outlet Maju Jaya</td>
                                    <td>Jl. Raya No. 123</td>
                                    <td>Jakarta</td>
                                    <td>Rp 15.000.000</td>
                                    <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Salon Berkah Abadi</td>
                                    <td>Jl. Kenanga No. 45</td>
                                    <td>Bandung</td>
                                    <td>Rp 10.000.000</td>
                                    <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Toko Sejahtera</td>
                                    <td>Jl. Mawar No. 67</td>
                                    <td>Surabaya</td>
                                    <td>Rp 8.000.000</td>
                                    <td><span class="badge bg-warning me-1"></span> Tidak Aktif (3 bln)</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Detail</a>
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
                $('#customerReportTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Inisialisasi Chart.js untuk Customer Berdasarkan Status
                const customerStatusCtx = document.getElementById('customerStatusChart').getContext('2d');
                new Chart(customerStatusCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Aktif', 'Tidak Aktif', 'Baru'],
                        datasets: [{
                            data: [450, 35, 15], // Contoh data jumlah customer
                            backgroundColor: ['#28a745', '#ffc107', '#007bff'],
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
                                text: 'Customer Berdasarkan Status'
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Top 10 Customer Berdasarkan Penjualan
                const topCustomersCtx = document.getElementById('topCustomersChart').getContext('2d');
                new Chart(topCustomersCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Outlet Maju Jaya', 'Salon Berkah', 'Toko Sejahtera', 'Griya Rambut',
                            'Pusat Kecantikan'
                        ],
                        datasets: [{
                            label: 'Total Pembelian (Rp Juta)',
                            data: [15, 10, 8, 7, 6], // Contoh data total pembelian dalam juta Rp
                            backgroundColor: ['#007bff', '#17a2b8', '#6c757d', '#28a745', '#ffc107'],
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
                                text: 'Top 10 Customer Berdasarkan Penjualan'
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
