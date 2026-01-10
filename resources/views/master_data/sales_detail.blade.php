@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail RPK Kecil A
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('master_data.sales') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Master RPK Kecil
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
                        <span class="avatar avatar-xl mb-3" style="background-image: url({{ asset('assets/tabler/dashboard/static/avatars/000m.jpg') }})"></span>
                        <h3 class="m-0 text-truncate">RPK Kecil A</h3>
                        <div class="text-secondary">GPK Area Jakarta</div>
                        <div class="mt-3">
                            <span class="badge bg-success me-1"></span> Aktif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Pribadi & Kontak</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">ID RPK</div>
                                <div class="datagrid-content">RPK001</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Email</div>
                                <div class="datagrid-content">andi.wijaya@example.com</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nomor Telepon</div>
                                <div class="datagrid-content">+62 812-3456-7890</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Alamat</div>
                                <div class="datagrid-content">Jl. Merdeka No. 10, Jakarta Pusat</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tanggal Bergabung</div>
                                <div class="datagrid-content">01 Januari 2023</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">GPK</div>
                                <div class="datagrid-content">GPK Jakarta</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Widget Kinerja Sales --}}
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
                                    Total Penjualan (Bulan Ini)
                                </div>
                                <div class="text-secondary">
                                    Rp 15.000.000
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
                                    Jumlah Barang (Bulan Ini)
                                </div>
                                <div class="text-secondary">
                                    40 Barang
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
                                    Pencapaian Target Penjualan
                                </div>
                                <div class="text-secondary">
                                    90%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Target & Pencapaian --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Target & Pencapaian</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Target Penjualan Tahunan</div>
                                <div class="datagrid-content">Rp 180.000.000</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pencapaian Penjualan Tahunan</div>
                                <div class="datagrid-content">Rp 105.000.000 (58.3%)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Total PO</div>
                                <div class="datagrid-content">500 PO</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Total Stock</div>
                                <div class="datagrid-content">40 Barang (80%)</div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Program & Reward (Tier) --}}
            <!-- <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Program & Reward</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tier Sales</div>
                                <div class="datagrid-content">
                                    <span class="badge bg-purple me-1"></span> Gold Tier
                                    <small class="text-secondary">(Target untuk Platinum: Rp 200.000.000 penjualan tahunan)</small>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Progress ke Tier Berikutnya</div>
                                <div class="datagrid-content">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-purple" style="width: 52%" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
                                            <span class="visually-hidden">52% Complete</span>
                                        </div>
                                    </div>
                                    52%
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Reward Aktif</div>
                                <div class="datagrid-content">Bonus Kinerja Bulanan (jika mencapai 90% target kunjungan)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Riwayat Reward</div>
                                <div class="datagrid-content">
                                    <ul class="list-unstyled mb-0">
                                        <li>- Voucher Belanja (Des 2024)</li>
                                        <li>- Bonus Penjualan Q4 (Nov 2024)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            {{-- Grafik Kinerja Sales --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tren Penjualan Bulanan</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-sales-monthly" style="height: 200px;">
                            <canvas id="salesMonthlyChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Status PO</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-task-status" style="height: 200px;">
                            <canvas id="taskStatusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daftar Sales Order Terbaru --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Penjualan Terbaru</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No. SO</th>
                                        <th>Nama Customer</th>
                                        <th>Tanggal Order</th>
                                        <th>Total Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SO001</td>
                                        <td>Customer 1</td>
                                        <td>01 Juli 2025</td>
                                        <td>Rp 1.500.000</td>
                                        <td><a href="">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>SO008</td>
                                        <td>Customer 2</td>
                                        <td>04 Juli 2025</td>
                                        <td>Rp 800.000</td>
                                        <td><a href="">Detail</a></td>
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
        // Chart: Tren Penjualan Bulanan Sales
        const salesMonthlyCtx = document.getElementById('salesMonthlyChart').getContext('2d');
        new Chart(salesMonthlyCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Penjualan (Juta Rp)',
                    data: [10, 12, 11, 14, 13, 16, 15], // Contoh data
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

        // Chart: Kunjungan Task per Status
        const taskStatusCtx = document.getElementById('taskStatusChart').getContext('2d');
        new Chart(taskStatusCtx, {
            type: 'pie',
            data: {
                labels: ['Selesai', 'Belum Selesai', 'Tidak Ada Order'],
                datasets: [{
                    data: [30, 8, 2], // Contoh data jumlah task
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
                        text: 'Kunjungan Task per Status'
                    }
                }
            }
        });
    });
</script>
@endpush
@endsection
