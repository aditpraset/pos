    @extends('layouts.app')

    @section('content')
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Master Data GPK
                        </h2>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-create-depo">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                Tambah GPK Baru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                {{-- Widget untuk Ringkasan Data Depo --}}
                <div class="row row-cards mb-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-primary text-white avatar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 7v4l3 3" />
                                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Total GPK Aktif
                                        </div>
                                        <div class="text-secondary">
                                            3 GPK
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            GPK dengan Pengiriman Tertinggi
                                        </div>
                                        <div class="text-secondary">
                                            GPK Jakarta
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                                <path d="M12 12v9" />
                                                <path d="M15 15l-3 3l-3 -3" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Total RPK per GPK (Rata-rata)
                                        </div>
                                        <div class="text-secondary">
                                            4 RPK Kecil
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            GPK dengan Pengiriman Terbanyak
                                        </div>
                                        <div class="text-secondary">
                                            GPK Jakarta
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Grafik Depo --}}
                <div class="row row-cards mb-3">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Distribusi RPK per GPK</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-sales-distribution-per-depo" style="height: 200px;">
                                    <canvas id="salesDistributionPerDepoChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="depoTable" class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Nama GPK</th>
                                        <th>Alamat</th>
                                        <th>Kepala GPK</th>
                                        <th>Jumlah RPK</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GPK Jakarta</td>
                                        <td>Jl. Sudirman No. 1</td>
                                        <td>Bapak Joni</td>
                                        <td>5</td>
                                        <td><span class="badge bg-success me-1"></span> Aktif</td>
                                        <td>
                                            <a href="{{ route('master_data.depo_detail', ['id' => 'DEPO001']) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GPK Bandung</td>
                                        <td>Jl. Asia Afrika No. 2</td>
                                        <td>Ibu Siti</td>
                                        <td>4</td>
                                        <td><span class="badge bg-success me-1"></span> Aktif</td>
                                        <td>
                                            <a href="{{ route('master_data.depo_detail', ['id' => 'DEPO002']) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GPK Surabaya</td>
                                        <td>Jl. Pahlawan No. 3</td>
                                        <td>Bapak Agung</td>
                                        <td>3</td>
                                        <td><span class="badge bg-success me-1"></span> Aktif</td>
                                        <td>
                                            <a href="{{ route('master_data.depo_detail', ['id' => 'DEPO003']) }}"
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
        </div>

        {{-- Modal Create Depo --}}
        <div class="modal modal-blur fade" id="modal-create-depo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Depo Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Depo</label>
                                <input type="text" class="form-control" name="nama_depo"
                                    placeholder="Masukkan nama depo" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat"
                                    placeholder="Masukkan alamat depo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kepala Depo</label>
                                <input type="text" class="form-control" name="kepala_depo"
                                    placeholder="Nama kepala depo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="no_telepon"
                                    placeholder="Nomor telepon depo">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Depo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('#depoTable').DataTable({

                    });

           
                    // Chart: Distribusi Sales per Depo
                    const salesDistributionPerDepoCtx = document.getElementById('salesDistributionPerDepoChart').getContext(
                        '2d');
                    new Chart(salesDistributionPerDepoCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Depo Jakarta', 'Depo Bandung', 'Depo Surabaya'],
                            datasets: [{
                                data: [5, 4, 3], // Contoh data jumlah sales per depo
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
                                    text: 'Distribusi Sales per Depo'
                                }
                            }
                        }
                    });
                });
            </script>
        @endpush
    @endsection
