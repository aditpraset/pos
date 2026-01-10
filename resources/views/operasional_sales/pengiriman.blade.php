@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Manajemen Pengiriman
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        {{-- Tombol ini bisa untuk menambah pengiriman baru jika ada alur terpisah,
                         atau untuk memicu modal update status pengiriman --}}
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-update-delivery">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Update Pengiriman
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Pengiriman --}}
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
                                        Total Pengiriman
                                    </div>
                                    <div class="text-secondary">
                                        30 Pengiriman
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
                                        Pengiriman Terkirim
                                    </div>
                                    <div class="text-secondary">
                                        20 Pengiriman
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
                                        Pengiriman Gagal
                                    </div>
                                    <div class="text-secondary">
                                        2 Pengiriman
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="deliveryTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No. DO</th>
                                    <th>GPK</th>
                                    <th>RPK</th>
                                    <th>Status Pengiriman</th>
                                    <th>Waktu Kirim</th>
                                    <th>Foto Pengiriman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DO001</td>
                                    <td>GPK Jakarta</td>
                                    <td>RPK001</td>
                                    <td><span class="badge bg-yellow me-1"></span> Terjadwal</td>
                                    <td>2025-07-03 10:00</td>
                                    <td>-</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.pengiriman_detail', ['id' => 'DO001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modal-update-delivery" data-so-id="SO002">Update Status</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DO002</td>
                                    <td>GPK Bandung</td>
                                    <td>RPK002</td>
                                    <td><span class="badge bg-success me-1"></span> Terkirim</td>
                                    <td>2025-07-01 14:30</td>
                                    <td><a href="#">Lihat Foto</a></td>
                                    <td>
                                        <a href="{{ route('operasional_sales.pengiriman_detail', ['id' => 'DO002']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DO003</td>
                                    <td>GPK Surabaya</td>
                                    <td>RPK003</td>
                                    <td><span class="badge bg-danger me-1"></span> Pending</td>
                                    <td>2025-07-04 11:00</td>
                                    <td>-</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.pengiriman_detail', ['id' => 'DO003']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modal-update-delivery" data-so-id="SO005">Update Status</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Update Status Pengiriman --}}
    <div class="modal modal-blur fade" id="modal-update-delivery" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Status Pengiriman <span id="modal-so-id"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">No. Sales Order</label>
                            <input type="text" class="form-control" id="delivery-so-id" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Pengiriman</label>
                            <select class="form-select" name="status_pengiriman" id="status_pengiriman">
                                <option value="">Pilih Status</option>
                                <option value="terjadwal">Terjadwal</option>
                                <option value="terkirim">Terkirim</option>
                                <option value="pending">Pending (Outlet Tutup)</option>
                                <option value="gagal">Gagal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Pengiriman</label>
                            <input type="file" class="form-control" name="foto_pengiriman" accept="image/*">
                            <small class="form-hint">Lampirkan foto bukti pengiriman.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanda Tangan Outlet (Jika Terkirim)</label>
                            <div class="border" style="height: 150px; background: #f8f9fa;">
                                {{-- Placeholder for Signature Pad --}}
                                <p class="text-muted text-center py-5">Area untuk tanda tangan digital</p>
                            </div>
                            <small class="form-hint">Akan diisi dengan library tanda tangan digital (misal: Signature
                                Pad).</small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
                $('#deliveryTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Mengisi ID SO ke modal saat tombol "Update Status" diklik
                $('#modal-update-delivery').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget); // Button that triggered the modal
                    var soId = button.data('so-id'); // Extract info from data-* attributes
                    var modal = $(this);
                    modal.find('#modal-so-id').text(soId);
                    modal.find('#delivery-so-id').val(soId);
                });
            });
        </script>
    @endpush
@endsection
