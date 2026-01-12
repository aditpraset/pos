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
                                        Total Penjualan
                                    </div>
                                    <div class="text-secondary">
                                        Rp {{ number_format($totalSales, 0, ',', '.') }}
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
                                        Rata-rata Harian
                                    </div>
                                    <div class="text-secondary">
                                        Rp {{ number_format($averageDailySales, 0, ',', '.') }}
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
                                        {{ $totalTransactions }} Transaksi
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
                                        {{ $totalItemsSold }} Unit
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
                    <form action="{{ route('reports.penjualan') }}" method="GET" class="mb-3">
                        <label class="form-label">Filter Periode</label>
                        <div class="row g-2">
                            <div class="col-auto">
                                <input type="date" class="form-control" name="start_date"
                                    value="{{ $startDate }}">
                            </div>
                            <div class="col-auto align-self-center">
                                -
                            </div>
                            <div class="col-auto">
                                <input type="date" class="form-control" name="end_date" value="{{ $endDate }}">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="salesReportTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No. Order</th>
                                    <th>Tanggal</th>
                                    <th>Pelanggan</th>
                                    <th>Pembayaran</th>
                                    <th>Total Nilai</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_number }}</td>
                                        <td>{{ $order->created_at->format('d M Y') }}</td>
                                        <td>{{ $order->customer_name }}</td>
                                        <td>{{ $order->paymentMethod->name ?? '-' }}</td>
                                        <td>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                        <td>
                                            <span
                                                class="badge bg-{{ $order->status_id == 1 ? 'warning' : ($order->status_id == 2 ? 'success' : 'danger') }} me-1"></span>
                                            {{ $order->status->name ?? 'Unknown' }}
                                        </td>
                                        <td>
                                            <a href="{{ route('reports.penjualan_detail', $order->id) }}"
                                                class="btn btn-info btn-sm">Detail Order</a>
                                        </td>
                                    </tr>
                                @endforeach
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
                        labels: @json($chartDates),
                        datasets: [{
                            label: 'Penjualan (Rp)',
                            data: @json($chartValues),
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
                                text: 'Tren Penjualan (Harian)'
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.dataset.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed.y !== null) {
                                            label += new Intl.NumberFormat('id-ID', {
                                                style: 'currency',
                                                currency: 'IDR'
                                            }).format(context.parsed.y);
                                        }
                                        return label;
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value, index, values) {
                                        return new Intl.NumberFormat('id-ID', {
                                            style: 'currency',
                                            currency: 'IDR',
                                            maximumSignificantDigits: 3
                                        }).format(value);
                                    }
                                }
                            }
                        }
                    }
                });

                // Inisialisasi Chart.js untuk Penjualan per Kategori Produk
                const salesCategoryCtx = document.getElementById('salesCategoryChart').getContext('2d');
                new Chart(salesCategoryCtx, {
                    type: 'bar',
                    data: {
                        labels: @json($categoryLabels),
                        datasets: [{
                            label: 'Total Qty Terjual',
                            data: @json($categoryData),
                            backgroundColor: ['#28a745', '#ffc107', '#17a2b8', '#dc3545', '#6c757d',
                                '#007bff', '#6610f2'
                            ],
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
