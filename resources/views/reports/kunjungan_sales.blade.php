@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Laporan Kunjungan Sales
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
            {{-- Widget untuk Ringkasan Data Kunjungan Sales --}}
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
                                        Total Kunjungan Bulan Ini
                                    </div>
                                    <div class="text-secondary">
                                        120 Kunjungan
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
                                        Kunjungan Selesai
                                    </div>
                                    <div class="text-secondary">
                                        100 Kunjungan
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
                                        Kunjungan Belum Selesai
                                    </div>
                                    <div class="text-secondary">
                                        20 Kunjungan
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
                                        Rata-rata Kunjungan per Sales
                                    </div>
                                    <div class="text-secondary">
                                        10 Kunjungan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kunjungan Sales --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kunjungan per Sales (Bulan Ini)</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-visits-per-sales" style="height: 200px;">
                                <canvas id="visitsPerSalesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Kunjungan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-visit-status" style="height: 200px;">
                                <canvas id="visitStatusChart"></canvas>
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
                        <label class="form-label">Filter Berdasarkan Sales</label>
                        <select class="form-select">
                            <option>Semua Sales</option>
                            <option>Sales A</option>
                            <option>Sales B</option>
                            <option>Sales C</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="salesVisitReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Sales</th>
                                    <th>Outlet</th>
                                    <th>Status Check-in</th>
                                    <th>Status Order</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01 Juli 2025</td>
                                    <td>Sales A</td>
                                    <td>Outlet Maju Jaya</td>
                                    <td><span class="badge bg-success me-1"></span> Check-in</td>
                                    <td>Order Dibuat (SO001)</td>
                                    <td>Kunjungan berhasil, order tercatat.</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK001']) }}"
                                            class="btn btn-info btn-sm">Detail Task</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02 Juli 2025</td>
                                    <td>Sales B</td>
                                    <td>Outlet Sejahtera</td>
                                    <td><span class="badge bg-warning me-1"></span> Belum Check-in</td>
                                    <td>Belum Ada Order</td>
                                    <td>Task belum diselesaikan.</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK002']) }}"
                                            class="btn btn-info btn-sm">Detail Task</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03 Juli 2025</td>
                                    <td>Sales A</td>
                                    <td>Outlet Jaya Abadi</td>
                                    <td><span class="badge bg-success me-1"></span> Check-in</td>
                                    <td><span class="badge bg-danger me-1"></span> No Order (Tutup)</td>
                                    <td>Outlet tutup saat kunjungan.</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK003']) }}"
                                            class="btn btn-info btn-sm">Detail Task</a>
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
                $('#salesVisitReportTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Inisialisasi Chart.js untuk Kunjungan per Sales
                const visitsPerSalesCtx = document.getElementById('visitsPerSalesChart').getContext('2d');
                new Chart(visitsPerSalesCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Sales A', 'Sales B', 'Sales C', 'Sales D'],
                        datasets: [{
                            label: 'Jumlah Kunjungan',
                            data: [40, 30, 25, 25], // Contoh data
                            backgroundColor: ['#007bff', '#28a745', '#ffc107', '#17a2b8'],
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
                                text: 'Kunjungan per Sales'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Status Kunjungan
                const visitStatusCtx = document.getElementById('visitStatusChart').getContext('2d');
                new Chart(visitStatusCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Selesai', 'Belum Selesai', 'Tidak Ada Order'],
                        datasets: [{
                            data: [100, 15, 5], // Contoh data
                            backgroundColor: ['#28a745', '#007bff', '#dc3545'],
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
                                text: 'Status Kunjungan'
                            }
                        }
                    }
                });
            });
        </script>
    @endpush
@endsection
