@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Laporan Penagihan
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
            {{-- Widget untuk Ringkasan Data Penagihan --}}
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
                                        Total Tagihan Bulan Ini
                                    </div>
                                    <div class="text-secondary">
                                        Rp 10.000.000
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
                                        Tagihan Lunas
                                    </div>
                                    <div class="text-secondary">
                                        Rp 7.500.000
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
                                        Tagihan Belum Lunas
                                    </div>
                                    <div class="text-secondary">
                                        Rp 2.500.000
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
                                        Tagihan Jatuh Tempo
                                    </div>
                                    <div class="text-secondary">
                                        2 Tagihan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Penagihan --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Pembayaran Tagihan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-collection-status" style="height: 200px;">
                                <canvas id="collectionStatusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Total Penagihan per RPK (Bulan Ini)</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-collection-sales" style="height: 200px;">
                                <canvas id="collectionSalesChart"></canvas>
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
                        <label class="form-label">Filter Berdasarkan RPK</label>
                        <select class="form-select">
                            <option>Semua RPK</option>
                            <option>RPK001</option>
                            <option>RPK002</option>
                            <option>RPK003</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Filter Berdasarkan Status Pembayaran</label>
                        <select class="form-select">
                            <option>Semua Status</option>
                            <option>Lunas</option>
                            <option>Belum Lunas</option>
                            <option>Jatuh Tempo</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="collectionReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No. Invoice/SO</th>
                                    <th>GPK</th>
                                    <th>RPK</th>
                                    <th>Total Tagihan</th>
                                    <th>Jumlah Terbayar</th>
                                    <th>Sisa Tagihan</th>
                                    <th>Tanggal Jatuh Tempo</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>INV001 (SO001)</td>
                                    <td>GPK Solo</td>
                                    <td>RPK001</td>
                                    <td>Rp 1.500.000</td>
                                    <td>Rp 0</td>
                                    <td>Rp 1.500.000</td>
                                    <td>15 Juli 2025</td>
                                    <td><span class="badge bg-warning me-1"></span> Belum Lunas</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.penagihan_detail', ['id' => 'INV001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INV002 (SO002)</td>
                                    <td>GPK Solo</td>
                                    <td>RPK002</td>
                                    <td>Rp 2.000.000</td>
                                    <td>Rp 0</td>
                                    <td>Rp 2.000.000</td>
                                    <td>30 Juni 2025</td>
                                    <td><span class="badge bg-danger me-1"></span> Jatuh Tempo</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.penagihan_detail', ['id' => 'INV002']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INV003 (SO004)</td>
                                    <td>GPK Solo</td>
                                    <td>RPK003</td>
                                    <td>Rp 3.200.000</td>
                                    <td>Rp 3.200.000</td>
                                    <td>Rp 0</td>
                                    <td>25 Juni 2025</td>
                                    <td><span class="badge bg-success me-1"></span> Lunas</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.penagihan_detail', ['id' => 'INV003']) }}"
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
                $('#collectionReportTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Inisialisasi Chart.js untuk Status Pembayaran Tagihan
                const collectionStatusCtx = document.getElementById('collectionStatusChart').getContext('2d');
                new Chart(collectionStatusCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Lunas', 'Belum Lunas', 'Jatuh Tempo'],
                        datasets: [{
                            data: [7500000, 2500000, 2000000], // Contoh data (total nilai)
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
                                text: 'Status Pembayaran Tagihan'
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Total Penagihan per Sales
                const collectionSalesCtx = document.getElementById('collectionSalesChart').getContext('2d');
                new Chart(collectionSalesCtx, {
                    type: 'bar',
                    data: {
                        labels: ['RPK001', 'RPK002', 'RPK003'],
                        datasets: [{
                            label: 'Total Tagihan (Rp)',
                            data: [5000000, 3000000, 2000000], // Contoh data
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
                                text: 'Total Penagihan per Sales'
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
