@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Dashboard Supplier
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-title">Selamat Datang, Supplier!</h4>
                    <div class="text-secondary">Ringkasan aktivitas Anda hari ini.</div>
                </div>
            </div>

            {{-- Widget Ringkasan Kinerja Sales --}}
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.772 19.018a7 7 0 1 0 -10.544 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M12 12l0 9" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Invoice
                                </div>
                                <div class="text-secondary">
                                    Rp 5.000.000
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Invoice Outstanding
                                </div>
                                <div class="text-secondary">
                                    Rp 3.500.000
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M12 12v9" /><path d="M15 15l-3 3l-3 -3" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total PO
                                </div>
                                <div class="text-secondary">
                                    100 PO
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Pengiriman Dalam Proses
                                </div>
                                <div class="text-secondary">
                                    50 Pengiriman
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Mingguan --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pencapaian PO Mingguan</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-sales-weekly" style="height: 200px;">
                            <canvas id="salesWeeklyChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Status Pengiriman Barang</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-visits-weekly" style="height: 200px;">
                            <canvas id="visitsWeeklyChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daftar Task Hari Ini --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Order Today</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>DateTime</th>
                                        <th>Total Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD-2024-001</td>
                                        <td>29 Nov 2024, 08:30</td>
                                        <td>Rp 1.500.000</td>
                                        <td><a href="#">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-002</td>
                                        <td>29 Nov 2024, 10:15</td>
                                        <td>Rp 1.000.000</td>
                                        <td><a href="#">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-003</td>
                                        <td>29 Nov 2024, 14:45</td>
                                        <td>Rp 2.500.000</td>
                                        <td><a href="#">Detail</a></td>
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
        // Chart: Pencapaian Penjualan Mingguan
        const salesWeeklyCtx = document.getElementById('salesWeeklyChart').getContext('2d');
        new Chart(salesWeeklyCtx, {
            type: 'line',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [{
                    label: 'Penjualan (Juta Rp)',
                    data: [1.5, 2.0, 1.8, 2.5, 3.0, 0.5, 0], // Contoh data
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
                        text: 'Pencapaian Penjualan Mingguan'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Chart: Status Kunjungan Task Mingguan
        const visitsWeeklyCtx = document.getElementById('visitsWeeklyChart').getContext('2d');
        new Chart(visitsWeeklyCtx, {
            type: 'bar',
            data: {
                labels: ['Selesai', 'Belum Selesai', 'Pending'],
                datasets: [{
                    label: 'Jumlah Pengiriman',
                    data: [25, 10, 3], // Contoh data
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
                        text: 'Status Kunjungan Task Mingguan'
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
