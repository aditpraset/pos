@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Dashboard Gudang Pangan Kita
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-title">Selamat Datang, Kepala Gudang!</h4>
                    <div class="text-secondary">Ringkasan kinerja Gudang Anda.</div>
                </div>
            </div>

            {{-- Widget Ringkasan Kinerja Depo --}}
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
                                    Total Barang Masuk Bulan Ini
                                </div>
                                <div class="text-secondary">
                                    500 Barang
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
                                    Pengiriman Barang Bulan Ini
                                </div>
                                <div class="text-secondary">
                                    500 Barang
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
                                    Barang Masuk Hari ini
                                </div>
                                <div class="text-secondary">
                                    100 Barang
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
                                    Pengiriman Pending
                                </div>
                                <div class="text-secondary">
                                    5 Pengiriman
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Sales di Bawah Depo --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Pengiriman ke RPK Kecil</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-sales-per-depo" style="height: 200px;">
                            <canvas id="salesPerDepoChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Status Pengiriman Depo</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-delivery-depo-status" style="height: 200px;">
                            <canvas id="deliveryDepoStatusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tabel Kinerja Sales Individu --}}
            <!-- <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kinerja Sales Individu (Depo Ini)</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Sales</th>
                                        <th>Total Penjualan (Bulan Ini)</th>
                                        <th>Jumlah Kunjungan</th>
                                        <th>Pencapaian Target (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sales A</td>
                                        <td>Rp 15.000.000</td>
                                        <td>40</td>
                                        <td>90%</td>
                                    </tr>
                                    <tr>
                                        <td>Sales B</td>
                                        <td>Rp 12.000.000</td>
                                        <td>35</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>Sales C</td>
                                        <td>Rp 8.000.000</td>
                                        <td>25</td>
                                        <td>75%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Chart: Penjualan per Sales (Depo Ini)
        const salesPerDepoCtx = document.getElementById('salesPerDepoChart').getContext('2d');
        new Chart(salesPerDepoCtx, {
            type: 'bar',
            data: {
                labels: ['RPK Kecil A', 'RPK Kecil B', 'RPK Kecil C', 'RPK Kecil D', 'RPK Kecil E'],
                datasets: [{
                    label: 'Penjualan (Juta Rp)',
                    data: [15, 12, 8, 7, 5], // Contoh data
                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#17a2b8', '#6c757d'],
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
                        text: 'Penjualan per Sales (Depo Ini)'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Chart: Status Pengiriman Depo
        const deliveryDepoStatusCtx = document.getElementById('deliveryDepoStatusChart').getContext('2d');
        new Chart(deliveryDepoStatusCtx, {
            type: 'pie',
            data: {
                labels: ['Terkirim', 'Pending', 'Gagal'],
                datasets: [{
                    data: [20, 5, 2], // Contoh data jumlah pengiriman
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
                        text: 'Status Pengiriman Depo'
                    }
                }
            }
        });
    });
</script>
@endpush

@endsection
