@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Manajemen Data Outlet
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-outlet">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Outlet Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Outlet --}}
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
                                        Total Outlet Aktif
                                    </div>
                                    <div class="text-secondary">
                                        250 Outlet
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
                                        Outlet Baru Bulan Ini
                                    </div>
                                    <div class="text-secondary">
                                        10 Outlet
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
                                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M12 12v9" />
                                            <path d="M15 15l-3 3l-3 -3" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Outlet dengan Pembelian Tertinggi
                                    </div>
                                    <div class="text-secondary">
                                        Outlet Maju Jaya
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
                                        Outlet Belum Dikunjungi (30 Hari)
                                    </div>
                                    <div class="text-secondary">
                                        25 Outlet
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Outlet --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Distribusi Outlet per Tipe</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-outlet-by-type" style="height: 200px;">
                                <canvas id="outletByTypeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Outlet Baru per Bulan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-new-outlets-monthly" style="height: 200px;">
                                <canvas id="newOutletsMonthlyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="outletTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Nama Outlet</th>
                                    <th>Tipe</th>
                                    <th>Alamat</th>
                                    <th>Sales PIC</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Outlet Maju Jaya</td>
                                    <td>Salon</td>
                                    <td>Jl. Raya No. 123, Jakarta</td>
                                    <td>Andi Wijaya</td>
                                    <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    <td>
                                        <a href="{{ route('manajemen_relasi.outlet_detail', ['id' => 'OUTLET001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Toko Sejahtera</td>
                                    <td>Toko</td>
                                    <td>Jl. Merdeka No. 45, Bandung</td>
                                    <td>Budi Santoso</td>
                                    <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    <td>
                                        <a href="{{ route('manajemen_relasi.outlet_detail', ['id' => 'OUTLET002']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Salon Ceria</td>
                                    <td>Salon</td>
                                    <td>Jl. Bahagia No. 67, Surabaya</td>
                                    <td>Citra Dewi</td>
                                    <td><span class="badge bg-danger me-1"></span> Tidak Aktif</td>
                                    <td>
                                        <a href="{{ route('manajemen_relasi.outlet_detail', ['id' => 'OUTLET003']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Create Outlet --}}
    <div class="modal modal-blur fade" id="modal-create-outlet" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Outlet Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Outlet</label>
                            <input type="text" class="form-control" name="nama_outlet"
                                placeholder="Masukkan nama outlet" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipe Outlet</label>
                            <select class="form-select" name="tipe_outlet">
                                <option value="">Pilih Tipe</option>
                                <option value="salon">Salon</option>
                                <option value="toko">Toko</option>
                                <option value="agen">Agen</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat"
                                placeholder="Masukkan alamat outlet">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" class="form-control" name="kota"
                                placeholder="Masukkan kota outlet">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sales PIC</label>
                            <select class="form-select" name="sales_pic_id">
                                <option value="">Pilih Sales</option>
                                <option value="1">Andi Wijaya</option>
                                <option value="2">Budi Santoso</option>
                                <option value="3">Citra Dewi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="aktif">Aktif</option>
                                <option value="tidak_aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Outlet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#outletTable').DataTable({

                });

                // Chart: Distribusi Outlet per Tipe
                const outletByTypeCtx = document.getElementById('outletByTypeChart').getContext('2d');
                new Chart(outletByTypeCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Salon', 'Toko', 'Agen'],
                        datasets: [{
                            data: [150, 80, 20], // Contoh data jumlah outlet per tipe
                            backgroundColor: ['#007bff', '#28a745', '#ffc107'],
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
                                text: 'Distribusi Outlet per Tipe'
                            }
                        }
                    }
                });

                // Chart: Outlet Baru per Bulan
                const newOutletsMonthlyCtx = document.getElementById('newOutletsMonthlyChart').getContext('2d');
                new Chart(newOutletsMonthlyCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                        datasets: [{
                            label: 'Jumlah Outlet Baru',
                            data: [5, 8, 7, 10, 9, 12, 10], // Contoh data
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
                                text: 'Outlet Baru per Bulan'
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
