@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Manajemen Task Kunjungan Sales
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-task">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Buat Task Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Task --}}
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
                                        Total Task
                                    </div>
                                    <div class="text-secondary">
                                        20 Task
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
                                        Task Terjadwal
                                    </div>
                                    <div class="text-secondary">
                                        15 Task
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
                                        Task Selesai
                                    </div>
                                    <div class="text-secondary">
                                        5 Task
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
                                        Task Terlambat
                                    </div>
                                    <div class="text-secondary">
                                        2 Task
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Task --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Status Task Kunjungan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-task-status" style="height: 200px;">
                                <canvas id="taskStatusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Task Selesai per Sales (Minggu Ini)</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-task-sales" style="height: 200px;">
                                <canvas id="taskSalesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-table" class="nav-link active" data-bs-toggle="tab">Daftar Task (Tabel)</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-kanban" class="nav-link" data-bs-toggle="tab">Ringkasan Task (Kanban-like)</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        {{-- Tab Pane for Table View --}}
                        <div class="tab-pane active show" id="tabs-table">
                            <div class="mb-3">
                                <label class="form-label">Filter Berdasarkan Sales</label>
                                <select class="form-select">
                                    <option>Semua Sales</option>
                                    <option>Sales A</option>
                                    <option>Sales B</option>
                                    <option>Sales C</option>
                                </select>
                            </div>
                            <div class="table-responsive">
                                <table id="taskTable" class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                            <th>Sales</th>
                                            <th>Outlet</th>
                                            <th>Target Penjualan</th>
                                            <th>Status Check-in</th>
                                            <th>Foto Kunjungan</th>
                                            <th>Status Order</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sales A</td>
                                            <td>Outlet Maju Jaya</td>
                                            <td>Rp 5.000.000</td>
                                            <td><span class="badge bg-success text-white me-1"></span> Check-in</td>
                                            <td><a href="#">Lihat Foto</a></td>
                                            <td>Order Dibuat</td>
                                            <td><a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK001']) }}"
                                                    class="btn btn-info btn-sm">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>Sales B</td>
                                            <td>Outlet Sejahtera</td>
                                            <td>Rp 3.000.000</td>
                                            <td><span class="badge bg-warning text-white me-1"></span> Belum Check-in</td>
                                            <td>-</td>
                                            <td>Belum Ada Order</td>
                                            <td><a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK002']) }}"
                                                    class="btn btn-info btn-sm">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>Sales A</td>
                                            <td>Outlet Jaya Abadi</td>
                                            <td>Rp 7.000.000</td>
                                            <td><span class="badge bg-success text-white me-1"></span> Check-in</td>
                                            <td><a href="#">Lihat Foto</a></td>
                                            <td><span class="badge bg-danger text-white me-1"></span> No Order (Tutup)</td>
                                            <td><a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK003']) }}"
                                                    class="btn btn-info btn-sm">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>Sales C</td>
                                            <td>Outlet Makmur</td>
                                            <td>Rp 4.500.000</td>
                                            <td><span class="badge bg-success text-white me-1"></span> Check-in</td>
                                            <td><a href="#">Lihat Foto</a></td>
                                            <td>Order Dibuat</td>
                                            <td><a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK004']) }}"
                                                    class="btn btn-info btn-sm">Detail</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Tab Pane for Kanban View --}}
                        <div class="tab-pane" id="tabs-kanban">
                            <div class="row row-cards">
                                {{-- Kolom Task Terjadwal --}}
                                <div class="col-md-4">
                                    <div class="card card-stacked">
                                        <div class="card-header">
                                            <h3 class="card-title">Terjadwal (15)</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK001 - Sales A ke Outlet Maju Jaya</h4>
                                                    <p class="text-muted">Target: Rp 5.000.000</p>
                                                    <span class="badge bg-info text-white">Belum Check-in</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK001']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK002 - Sales B ke Outlet Sejahtera</h4>
                                                    <p class="text-muted">Target: Rp 3.000.000</p>
                                                    <span class="badge bg-info text-white">Belum Check-in</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK002']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK005 - Sales C ke Outlet Makmur</h4>
                                                    <p class="text-muted">Target: Rp 4.500.000</p>
                                                    <span class="badge bg-info text-white">Belum Check-in</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK005']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-muted text-center mt-3">...12 task lainnya</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- Kolom Task Selesai --}}
                                <div class="col-md-4">
                                    <div class="card card-stacked">
                                        <div class="card-header">
                                            <h3 class="card-title">Selesai (5)</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK003 - Sales A ke Outlet Jaya Abadi
                                                    </h4>
                                                    <p class="text-muted">Target: Rp 7.000.000</p>
                                                    <span class="badge bg-success text-white">Check-in & Order
                                                        Dibuat</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK003']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK004 - Sales B ke Outlet Sentosa</h4>
                                                    <p class="text-muted">Target: Rp 2.500.000</p>
                                                    <span class="badge bg-success text-white">Check-in & Order
                                                        Dibuat</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK004']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-muted text-center mt-3">...3 task lainnya</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- Kolom Tidak Ada Order / Terlambat --}}
                                <div class="col-md-4">
                                    <div class="card card-stacked">
                                        <div class="card-header">
                                            <h3 class="card-title">Tidak Ada Order / Terlambat (2)</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK006 - Sales A ke Outlet Tutup</h4>
                                                    <p class="text-muted">Target: Rp 6.000.000</p>
                                                    <span class="badge bg-danger text-white">No Order (Outlet Tutup)</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK006']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h4 class="card-title">Task #TASK007 - Sales C ke Outlet Jauh</h4>
                                                    <p class="text-muted">Target: Rp 3.500.000</p>
                                                    <span class="badge bg-warning text-white">Terlambat & Belum
                                                        Check-in</span>
                                                    <div class="mt-2 text-end">
                                                        <a href="{{ route('operasional_sales.task_detail', ['id' => 'TASK007']) }}"
                                                            class="btn btn-sm btn-outline-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Buat Task Baru --}}
    <div class="modal modal-blur fade" id="modal-create-task" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Task Kunjungan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Pilih Sales</label>
                            <select class="form-select" name="sales_id">
                                <option value="">Pilih Sales</option>
                                <option value="1">Sales A</option>
                                <option value="2">Sales B</option>
                                <option value="3">Sales C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pilih Outlet</label>
                            <select class="form-select" name="outlet_id">
                                <option value="">Pilih Outlet</option>
                                <option value="1">Outlet Maju Jaya</option>
                                <option value="2">Outlet Berkah Abadi</option>
                                <option value="3">Outlet Sejahtera</option>
                                <option value="4">Outlet Makmur</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Target Jumlah per Kategori Produk</label>
                            <input type="number" class="form-control" name="target_kategori_produk"
                                placeholder="Contoh: 100">
                            <small class="form-hint">Jumlah target produk secara keseluruhan atau per kategori.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Target Nilai Penjualan</label>
                            <input type="number" class="form-control" name="target_nilai_penjualan"
                                placeholder="Contoh: 5000000">
                            <small class="form-hint">Target nilai penjualan dalam Rupiah.</small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Inisialisasi DataTables setelah dokumen siap
            $(document).ready(function() {
                // Inisialisasi DataTables hanya jika tab tabel aktif saat halaman dimuat
                if ($('#tabs-table').hasClass('active')) {
                    $('#taskTable').DataTable({

                    });
                }

                // Inisialisasi DataTables saat tab tabel diaktifkan
                $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                    if ($(e.target).attr('href') === '#tabs-table') {
                        if (!$.fn.DataTable.isDataTable('#taskTable')) {
                            $('#taskTable').DataTable({
                                "language": {
                                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json"
                                }
                            });
                        } else {
                            // Jika sudah diinisialisasi, cukup redraw
                            $('#taskTable').DataTable().columns.adjust().draw();
                        }
                    }
                });

                // Contoh inisialisasi Chart.js (data placeholder)
                const taskStatusCtx = document.getElementById('taskStatusChart').getContext('2d');
                new Chart(taskStatusCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Terjadwal', 'Selesai', 'Terlambat/No Order'],
                        datasets: [{
                            data: [15, 5, 2], // Contoh data
                            backgroundColor: ['#007bff', '#28a745', '#dc3545'],
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
                                text: 'Status Task Kunjungan'
                            }
                        }
                    }
                });

                const taskSalesCtx = document.getElementById('taskSalesChart').getContext('2d');
                new Chart(taskSalesCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Sales A', 'Sales B', 'Sales C'],
                        datasets: [{
                            label: 'Task Selesai',
                            data: [3, 1, 1], // Contoh data
                            backgroundColor: '#28a745',
                            borderColor: '#28a745',
                            borderWidth: 1
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
                                text: 'Task Selesai per Sales (Minggu Ini)'
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
