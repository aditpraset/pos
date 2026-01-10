@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Manajemen Penagihan
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-add-collection">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Penagihan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Penagihan --}}
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
                                        Total Tagihan
                                    </div>
                                    <div class="text-secondary">
                                        Rp 50.000.000
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
                                        Tagihan Belum Lunas
                                    </div>
                                    <div class="text-secondary">
                                        Rp 15.000.000
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
                                        Tagihan Lunas
                                    </div>
                                    <div class="text-secondary">
                                        Rp 35.000.000
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
                                        Tagihan Jatuh Tempo
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

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="collectionTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No. Invoice/SO</th>
                                    <th>RPK</th>
                                    <th>Total Tagihan</th>
                                    <th>Tanggal Jatuh Tempo</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>INV001 (SO001)</td>
                                    <td>RPK001</td>
                                    <td>Rp 1.500.000</td>
                                    <td>15 Juli 2025</td>
                                    <td><span class="badge bg-warning me-1"></span> Belum Lunas</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modal-add-collection" data-invoice-id="INV001">Catat
                                            Pembayaran</a>
                                        <a href="{{ route('operasional_sales.penagihan_detail', ['id' => 'INV001']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INV002 (SO002)</td>
                                    <td>RPK002</td>
                                    <td>Rp 2.000.000</td>
                                    <td>30 Juni 2025</td>
                                    <td><span class="badge bg-danger me-1"></span> Jatuh Tempo</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modal-add-collection" data-invoice-id="INV002">Catat
                                            Pembayaran</a>
                                        <a href="{{ route('operasional_sales.penagihan_detail', ['id' => 'INV002']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INV003 (SO004)</td>
                                    <td>RPK003</td>
                                    <td>Rp 3.200.000</td>
                                    <td>25 Juni 2025</td>
                                    <td><span class="badge bg-success me-1"></span> Lunas</td>
                                    <td>
                                        <a href="{{ route('operasional_sales.penagihan_detail', ['id' => 'INV003']) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Catat/Update Penagihan --}}
    <div class="modal modal-blur fade" id="modal-add-collection" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Catat/Update Penagihan <span id="modal-invoice-id"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">No. Invoice/Sales Order</label>
                            <input type="text" class="form-control" id="collection-invoice-id" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembayaran</label>
                            <input type="date" class="form-control" name="tanggal_pembayaran">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Pembayaran</label>
                            <input type="number" class="form-control" name="jumlah_pembayaran"
                                placeholder="Masukkan jumlah pembayaran">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <select class="form-select" name="metode_pembayaran">
                                <option value="">Pilih Metode</option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer Bank</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Pembayaran</label>
                            <select class="form-select" name="status_pembayaran">
                                <option value="">Pilih Status</option>
                                <option value="belum_lunas">Belum Lunas</option>
                                <option value="sebagian">Lunas Sebagian</option>
                                <option value="lunas">Lunas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <textarea class="form-control" name="catatan" rows="3" placeholder="Tambahkan catatan penagihan"></textarea>
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
            // Inisialisasi DataTables setelah dokumen siap
            $(document).ready(function() {
                $('#collectionTable').DataTable({
                    // Konfigurasi DataTables opsional

                });

                // Mengisi ID Invoice/SO ke modal saat tombol "Catat Pembayaran" diklik
                $('#modal-add-collection').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget); // Button that triggered the modal
                    var invoiceId = button.data('invoice-id'); // Extract info from data-* attributes
                    var modal = $(this);
                    modal.find('#modal-invoice-id').text(invoiceId);
                    modal.find('#collection-invoice-id').val(invoiceId);
                });
            });
        </script>
    @endpush
@endsection
