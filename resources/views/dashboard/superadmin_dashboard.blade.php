@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Dashboard Superadmin
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-title">Selamat Datang, Superadmin!</h4>
                    <div class="text-secondary">Gambaran umum kinerja sistem secara keseluruhan.</div>
                </div>
            </div>

            {{-- Widget Ringkasan Kinerja Sistem --}}
            <div class="col-sm-6 col-lg-3">
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
                                    Total Penjualan Bulan Ini
                                </div>
                                <div class="text-secondary">
                                    Rp 125.000.000
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
                                    Jumlah Purchase Order
                                </div>
                                <div class="text-secondary">
                                    250 PO
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
                                    Total Penjualan Hari Ini
                                </div>
                                <div class="text-secondary">
                                    Rp 125.000.000
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Purchase Order Hari Ini
                                </div>
                                <div class="text-secondary">
                                    250 PO
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Keseluruhan --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tren Penjualan Keseluruhan (Tahunan)</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-overall-sales-trend" style="height: 200px;">
                            <canvas id="overallSalesTrendChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distribusi Purchase Order per Status</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-so-status-distribution" style="height: 200px;">
                            <canvas id="soStatusDistributionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daftar Notifikasi Penting --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Notifikasi Penting</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span class="badge bg-danger me-1"></span> 3 Purchase Order ditolak hari ini.
                            </li>
                            <li class="list-group-item">
                                <span class="badge bg-warning me-1"></span> 5 Pengiriman pending lebih dari 24 jam.
                            </li>
                            <!-- <li class="list-group-item">
                                <span class="badge bg-info me-1"></span> Program "Infinite Saving Salon" akan berakhir dalam 7 hari.
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Chart: Tren Penjualan Keseluruhan (Tahunan)
        const overallSalesTrendCtx = document.getElementById('overallSalesTrendChart').getContext('2d');
        new Chart(overallSalesTrendCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Penjualan (Miliar Rp)',
                    data: [1.2, 1.5, 1.3, 1.8, 2.0, 1.9, 2.2, 2.5, 2.3, 2.8, 3.0, 3.2], // Contoh data
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
                        text: 'Tren Penjualan Keseluruhan (Tahunan)'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Chart: Distribusi Sales Order per Status
        const soStatusDistributionCtx = document.getElementById('soStatusDistributionChart').getContext('2d');
        new Chart(soStatusDistributionCtx, {
            type: 'pie',
            data: {
                labels: ['Pending ACC', 'ACC', 'Ditolak'],
                datasets: [{
                    data: [20, 60, 15], // Contoh data persentase
                    backgroundColor: ['#ffc107', '#28a745', '#dc3545'],
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
                        text: 'Distribusi Sales Order per Status'
                    }
                }
            }
        });
    });
</script>
@endpush
@endsection
