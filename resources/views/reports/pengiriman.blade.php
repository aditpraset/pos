@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Laporan Pengiriman
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
            {{-- Widget untuk Ringkasan Data Pengiriman --}}
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
                                        Total Pengiriman Bulan Ini
                                    </div>
                                    <div class="text-secondary">
                                        30 Pengiriman
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
                                        Pengiriman Terkirim
                                    </div>
                                    <div class="text-secondary">
                                        25 Pengiriman
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
                                        Pengiriman Pending
                                    </div>
                                    <div class="text-secondary">
                                        3 Pengiriman
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
                                    <span class="bg-danger text-white avatar">
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
                                        Pengiriman Gagal
                                    </div>
                                    <div class="text-secondary">
                                        2 Pengiriman
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Pengiriman --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Pengiriman</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-delivery-status" style="height: 200px;">
                                <canvas id="deliveryStatusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pengiriman per Kurir (Bulan Ini)</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-delivery-courier" style="height: 200px;">
                                <canvas id="deliveryCourierChart"></canvas>
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
                        <label class="form-label">Filter Berdasarkan Kurir</label>
                        <select class="form-select">
                            <option>Semua Kurir</option>
                            <option>Delivery Team 1</option>
                            <option>Delivery Team 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Filter Berdasarkan Status</label>
                        <select class="form-select">
                            <option>Semua Status</option>
                            <option>Terkirim</option>
                            <option>Pending</option>
                            <option>Gagal</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="deliveryReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No. DO</th>
                                    <th>No. PO</th>
                                    <th>GPK</th>
                                    <th>RPK</th>
                                    <th>Status</th>
                                    <th>Tanggal Kirim</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DO001</td>
                                    <td>PO002</td>
                                    <td>GPK Jakarta</td>
                                    <td>RPK002</td>
                                    <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                    <td>03 Juli 2025</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.pengiriman_detail', ['id' => 'DO001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DO002</td>
                                    <td>PO004</td>
                                    <td>GPK Solo</td>
                                    <td>RPK002</td>
                                    <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                    <td>01 Juli 2025</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.pengiriman_detail', ['id' => 'DO002']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DO003</td>
                                    <td>PO005</td>
                                    <td>GPK Solo</td>
                                    <td>RPK002</td>
                                    <td><span class="badge bg-warning me-1"></span> Pending</td>
                                    <td>04 Juli 2025</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.pengiriman_detail', ['id' => 'DO003']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
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
                $('#deliveryReportTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Inisialisasi Chart.js untuk Status Pengiriman
                const deliveryStatusCtx = document.getElementById('deliveryStatusChart').getContext('2d');
                new Chart(deliveryStatusCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Terkirim', 'Pending', 'Gagal'],
                        datasets: [{
                            data: [25, 3, 2], // Contoh data
                            backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
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
                                text: 'Status Pengiriman'
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Pengiriman per Kurir
                const deliveryCourierCtx = document.getElementById('deliveryCourierChart').getContext('2d');
                new Chart(deliveryCourierCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Delivery Team 1', 'Delivery Team 2', 'Delivery Team 3'],
                        datasets: [{
                            label: 'Jumlah Pengiriman',
                            data: [15, 10, 5], // Contoh data
                            backgroundColor: ['#007bff', '#17a2b8', '#6c757d'],
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
                                text: 'Pengiriman per Kurir'
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
