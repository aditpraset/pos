@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Program/Promo: Infinite Saving Salon Community (ISC)
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('manajemen_produk_penawaran.program_promo') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar Program & Promo
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
                        <span class="avatar avatar-xl mb-3" style="background-image: url(https://placehold.co/128x128/E0E0E0/000000?text=Program)"></span>
                        <h3 class="m-0 text-truncate">Infinite Saving Salon Community (ISC)</h3>
                        <div class="text-secondary">Tipe: Program</div>
                        <div class="mt-3">
                            <span class="badge bg-success me-1"></span> Aktif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Program/Promo</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">ID Program/Promo</div>
                                <div class="datagrid-content">PROG001</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Periode</div>
                                <div class="datagrid-content">01 Januari 2025 - 31 Desember 2025</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Deskripsi</div>
                                <div class="datagrid-content">Program loyalitas untuk salon mitra Inaura.</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Target Partisipan</div>
                                <div class="datagrid-content">1000 Salon</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pencapaian Saat Ini</div>
                                <div class="datagrid-content">850 Salon (85%)</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Benefit Utama</div>
                                <div class="datagrid-content">Diskon khusus, pelatihan, poin reward</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Widget Kinerja Program/Promo --}}
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
                                    Total Partisipan
                                </div>
                                <div class="text-secondary">
                                    850
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
                                    Total Penjualan dari Program
                                </div>
                                <div class="text-secondary">
                                    Rp 80.000.000
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
                                    Jumlah Reward Diberikan
                                </div>
                                <div class="text-secondary">
                                    120 Reward
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Program/Promo --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tren Partisipasi Bulanan</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-participation-trend" style="height: 200px;">
                            <canvas id="participationTrendChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Penjualan dari Program/Promo per Bulan</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-sales-from-promo" style="height: 200px;">
                            <canvas id="salesFromPromoChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Daftar Partisipan --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Partisipan</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Outlet/Customer</th>
                                        <th>Sales PIC</th>
                                        <th>Tanggal Bergabung</th>
                                        <th>Total Pembelian dalam Program</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Outlet Maju Jaya</td>
                                        <td>Andi Wijaya</td>
                                        <td>10 Jan 2025</td>
                                        <td>Rp 5.000.000</td>
                                        <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>Salon Cantik Berseri</td>
                                        <td>Andi Wijaya</td>
                                        <td>15 Feb 2025</td>
                                        <td>Rp 3.500.000</td>
                                        <td><span class="badge bg-success me-1"></span> Aktif</td>
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
        // Chart: Tren Partisipasi Bulanan
        const participationTrendCtx = document.getElementById('participationTrendChart').getContext('2d');
        new Chart(participationTrendCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Jumlah Partisipan Baru',
                    data: [50, 70, 60, 80, 75, 90, 85], // Contoh data
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
                        text: 'Tren Partisipasi Bulanan'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Chart: Penjualan dari Program/Promo per Bulan
        const salesFromPromoCtx = document.getElementById('salesFromPromoChart').getContext('2d');
        new Chart(salesFromPromoCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Penjualan (Juta Rp)',
                    data: [10, 12, 11, 15, 14, 18, 16], // Contoh data
                    backgroundColor: '#28a745',
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
                        text: 'Penjualan dari Program/Promo per Bulan'
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
