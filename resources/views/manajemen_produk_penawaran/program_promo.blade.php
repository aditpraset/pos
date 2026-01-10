@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Manajemen Program & Promo
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-program-promo">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Program/Promo Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Program & Promo --}}
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
                                        Total Program Aktif
                                    </div>
                                    <div class="text-secondary">
                                        5 Program
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
                                        Total Promo Berjalan
                                    </div>
                                    <div class="text-secondary">
                                        8 Promo
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
                                        Program Terpopuler
                                    </div>
                                    <div class="text-secondary">
                                        ISC (Inaura Salon Community)
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
                                        Total Diskon Diberikan
                                    </div>
                                    <div class="text-secondary">
                                        Rp 5.000.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Program & Promo --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Partisipasi Program</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-program-participation" style="height: 200px;">
                                <canvas id="programParticipationChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Efektivitas Promo (Bulan Ini)</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-promo-effectiveness" style="height: 200px;">
                                <canvas id="promoEffectivenessChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="programPromoTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Periode</th>
                                    <th>Target / Keterangan</th>
                                    <th>Pencapaian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Infinite Saving Salon Community (ISC)</td>
                                    <td>Program</td>
                                    <td>Jan - Des 2025</td>
                                    <td>Target 1000 Salon</td>
                                    <td>850 Salon (85%)</td>
                                    <td>
                                        <a href="{{ route('manajemen_produk_penawaran.program_promo_detail', ['id' => 'PROG001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Promo Reguler 6+1</td>
                                    <td>Promo</td>
                                    <td>Berjalan</td>
                                    <td>Setiap pembelian 6 produk, gratis 1</td>
                                    <td>150 Transaksi</td>
                                    <td>
                                        <a href="{{ route('manajemen_produk_penawaran.program_promo_detail', ['id' => 'PROMO001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Diskon Agen 25%</td>
                                    <td>Diskon</td>
                                    <td>Permanen</td>
                                    <td>Diskon khusus untuk agen</td>
                                    <td>Rp 2.500.000</td>
                                    <td>
                                        <a href="{{ route('manajemen_produk_penawaran.program_promo_detail', ['id' => 'PROMO002']) }}"
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

    {{-- Modal Create Program/Promo --}}
    <div class="modal modal-blur fade" id="modal-create-program-promo" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Program/Promo Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Program/Promo</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan nama program atau promo" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipe</label>
                            <select class="form-select" name="tipe">
                                <option value="">Pilih Tipe</option>
                                <option value="program">Program</option>
                                <option value="promo">Promo</option>
                                <option value="diskon">Diskon</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Periode</label>
                            <input type="text" class="form-control" name="periode"
                                placeholder="Contoh: Jan - Des 2025 atau Berjalan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Target / Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="3"
                                placeholder="Deskripsi target atau keterangan promo"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#programPromoTable').DataTable({

                });

                // Chart: Partisipasi Program
                const programParticipationCtx = document.getElementById('programParticipationChart').getContext('2d');
                new Chart(programParticipationCtx, {
                    type: 'pie',
                    data: {
                        labels: ['ISC', 'ISS', 'ISSI', 'IBT', 'IST'],
                        datasets: [{
                            data: [40, 25, 15, 10, 10], // Contoh data persentase partisipasi
                            backgroundColor: ['#007bff', '#28a745', '#ffc107', '#17a2b8', '#6c757d'],
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
                                text: 'Partisipasi Program'
                            }
                        }
                    }
                });

                // Chart: Efektivitas Promo (Bulan Ini)
                const promoEffectivenessCtx = document.getElementById('promoEffectivenessChart').getContext('2d');
                new Chart(promoEffectivenessCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Promo 6+1', 'Promo ISC 12+3', 'Promo Khusus'],
                        datasets: [{
                            label: 'Jumlah Transaksi',
                            data: [150, 80, 40], // Contoh data jumlah transaksi yang menggunakan promo
                            backgroundColor: ['#28a745', '#007bff', '#ffc107'],
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
                                text: 'Efektivitas Promo (Bulan Ini)'
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
