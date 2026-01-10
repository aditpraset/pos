@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail GPK: GPK Jakarta
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('master_data.depo') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar GPK
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
                        <span class="avatar avatar-xl mb-3" style="background-image: url(https://placehold.co/128x128/E0E0E0/000000?text=Depo)"></span>
                        <h3 class="m-0 text-truncate">GPK Jakarta</h3>
                        <div class="text-secondary">Area Layanan: Jakarta Raya</div>
                        <div class="mt-3">
                            <span class="badge bg-success me-1"></span> Aktif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi GPK</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">ID GPK</div>
                                <div class="datagrid-content">GPK001</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Alamat</div>
                                <div class="datagrid-content">Jl. Sudirman No. 1, Jakarta Selatan</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Kepala GPK</div>
                                <div class="datagrid-content">Bapak Joni</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nomor Telepon</div>
                                <div class="datagrid-content">+62 21-1234567</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Jumlah RPK</div>
                                <div class="datagrid-content">5 RPK</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Area Cakupan</div>
                                <div class="datagrid-content">Jakarta Pusat, Jakarta Selatan, Jakarta Timur</div>
                            </div>
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
        // Chart: Tren Penjualan Depo Bulanan
        const depoSalesMonthlyCtx = document.getElementById('depoSalesMonthlyChart').getContext('2d');
        new Chart(depoSalesMonthlyCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Penjualan (Juta Rp)',
                    data: [40, 45, 42, 48, 50, 52, 50], // Contoh data
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
                        text: 'Tren Penjualan Depo Bulanan'
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
        const depoDeliveryStatusCtx = document.getElementById('depoDeliveryStatusChart').getContext('2d');
        new Chart(depoDeliveryStatusCtx, {
            type: 'pie',
            data: {
                labels: ['Terkirim', 'Pending', 'Gagal'],
                datasets: [{
                    data: [20, 3, 2], // Contoh data jumlah pengiriman
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
