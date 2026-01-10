@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Manajemen Data Customer
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-customer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Customer Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Customer --}}
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
                                        Total Customer Aktif
                                    </div>
                                    <div class="text-secondary">
                                        450 Customer
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
                                        Customer Baru Bulan Ini
                                    </div>
                                    <div class="text-secondary">
                                        15 Customer
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
                                        Customer dengan Pembelian Tertinggi
                                    </div>
                                    <div class="text-secondary">
                                        Kaiya Calzoni (Salon Cantik Berseri)
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
                                        Customer Belum Bertransaksi (90 Hari)
                                    </div>
                                    <div class="text-secondary">
                                        30 Customer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Customer --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Distribusi Customer per Tipe Outlet</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-customer-by-outlet-type" style="height: 200px;">
                                <canvas id="customerByOutletTypeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customer Baru per Bulan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-new-customers-monthly" style="height: 200px;">
                                <canvas id="newCustomersMonthlyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customerTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Nama Customer</th>
                                    <th>Nama Outlet</th>
                                    <th>Kota</th>
                                    <th>Sales PIC</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kaiya Calzoni</td>
                                    <td>Salon Cantik Berseri</td>
                                    <td>Jakarta Barat</td>
                                    <td>Andi Wijaya</td>
                                    <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    <td>
                                        <a href="{{ route('manajemen_relasi.customer_detail', ['id' => 'CUST001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Toko Makmur Jaya</td>
                                    <td>Bandung</td>
                                    <td>Budi Santoso</td>
                                    <td><span class="badge bg-success me-1"></span> Aktif</td>
                                    <td>
                                        <a href="{{ route('manajemen_relasi.customer_detail', ['id' => 'CUST002']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>Salon Indah</td>
                                    <td>Surabaya</td>
                                    <td>Citra Dewi</td>
                                    <td><span class="badge bg-warning me-1"></span> Tidak Aktif</td>
                                    <td>
                                        <a href="{{ route('manajemen_relasi.customer_detail', ['id' => 'CUST003']) }}"
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

    {{-- Modal Create Customer --}}
    <div class="modal modal-blur fade" id="modal-create-customer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Customer Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Customer</label>
                            <input type="text" class="form-control" name="nama_customer"
                                placeholder="Masukkan nama customer" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Outlet</label>
                            <input type="text" class="form-control" name="nama_outlet"
                                placeholder="Masukkan nama outlet customer">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat"
                                placeholder="Masukkan alamat customer">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" class="form-control" name="kota"
                                placeholder="Masukkan kota customer">
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
                            <button type="submit" class="btn btn-primary">Simpan Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#customerTable').DataTable({

                });

                // Chart: Distribusi Customer per Tipe Outlet
                const customerByOutletTypeCtx = document.getElementById('customerByOutletTypeChart').getContext('2d');
                new Chart(customerByOutletTypeCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Salon', 'Toko', 'Agen'],
                        datasets: [{
                            data: [300, 100, 50], // Contoh data jumlah customer per tipe outlet
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
                                text: 'Distribusi Customer per Tipe Outlet'
                            }
                        }
                    }
                });

                // Chart: Customer Baru per Bulan
                const newCustomersMonthlyCtx = document.getElementById('newCustomersMonthlyChart').getContext('2d');
                new Chart(newCustomersMonthlyCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                        datasets: [{
                            label: 'Jumlah Customer Baru',
                            data: [8, 10, 12, 15, 13, 18, 15], // Contoh data
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
                                text: 'Customer Baru per Bulan'
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
