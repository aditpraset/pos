@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Manajemen Sales Order
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-create-so">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Buat Sales Order Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        {{-- Widget untuk Ringkasan Data Sales Order --}}
        <div class="row row-cards mb-3">
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
                                    Total Sales Order
                                </div>
                                <div class="text-secondary">
                                    50 SO
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    SO Pending ACC
                                </div>
                                <div class="text-secondary">
                                    5 SO
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
                                    SO Terkirim
                                </div>
                                <div class="text-secondary">
                                    30 SO
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
                                    SO Ditolak
                                </div>
                                <div class="text-secondary">
                                    3 SO
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
                    <table id="salesOrderTable" class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>No. SO</th>
                                <th>Outlet</th>
                                <th>Total Nilai</th>
                                <th>Status</th>
                                <th>Waktu Kirim</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SO001</td>
                                <td>Outlet Maju Jaya</td>
                                <td>Rp 1.500.000</td>
                                <td><span class="badge bg-yellow me-1"></span> Pending ACC</td>
                                <td>-</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">ACC</a>
                                    <a href="#" class="btn btn-warning btn-sm">Revisi</a>
                                    <a href="#" class="btn btn-danger btn-sm">Reject</a>
                                </td>
                            </tr>
                            <tr>
                                <td>SO002</td>
                                <td>Outlet Sejahtera</td>
                                <td>Rp 2.000.000</td>
                                <td><span class="badge bg-green me-1"></span> ACC</td>
                                <td>2025-07-03 10:00</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Update Kirim</a>
                                </td>
                            </tr>
                            <tr>
                                <td>SO003</td>
                                <td>Outlet Berkah Abadi</td>
                                <td>Rp 750.000</td>
                                <td><span class="badge bg-red me-1"></span> Reject</td>
                                <td>-</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>SO004</td>
                                <td>Outlet Contoh</td>
                                <td>Rp 3.200.000</td>
                                <td><span class="badge bg-blue me-1"></span> Terkirim</td>
                                <td>2025-07-01 14:30</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Buat Sales Order Baru --}}
<div class="modal modal-blur fade" id="modal-create-so" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Sales Order Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Outlet</label>
                        <select class="form-select" name="outlet_id">
                            <option value="">Pilih Outlet</option>
                            <option value="1">Outlet Maju Jaya</option>
                            <option value="2">Outlet Berkah Abadi</option>
                            <option value="3">Outlet Sejahtera</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program yang Diikuti</label>
                        <select class="form-select" name="program_id">
                            <option value="">Tidak ada program</option>
                            <option value="1">Inaura Salon Community (ISC)</option>
                            <option value="2">Infinite Saving Salon (ISS)</option>
                        </select>
                    </div>

                    <div class="hr-text hr-text-left">Daftar Barang yang Diorder</div>
                    <div id="product-list">
                        <div class="row mb-3 product-item">
                            <div class="col-md-5">
                                <label class="form-label">Produk</label>
                                <select class="form-select" name="products[0][id]">
                                    <option value="">Pilih Produk</option>
                                    <option value="1">Shampo A</option>
                                    <option value="2">Kondisioner B</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Kuantitas</label>
                                <input type="number" class="form-control" name="products[0][quantity]" value="1" min="1">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Harga Satuan</label>
                                <input type="text" class="form-control" name="products[0][price]" value="100000" readonly>
                            </div>
                            <div class="col-md-1 d-flex align-items-end">
                                <button type="button" class="btn btn-danger btn-icon remove-product">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" id="add-product-btn">Tambah Produk</button>

                    <div class="hr-text hr-text-left mt-4">Detail Bonus & Diskon</div>
                    <div class="mb-3">
                        <label class="form-label">Bonus Produk</label>
                        <input type="text" class="form-control" name="bonus_produk" placeholder="Contoh: Beli 6 gratis 1 (Reguler)">
                        <small class="form-hint">Misalnya, bonus reguler, program, atau khusus.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon Penjualan</label>
                        <input type="text" class="form-control" name="diskon_penjualan" placeholder="Contoh: 10% (Reguler)">
                        <small class="form-hint">Misalnya, diskon reguler, program, agen, atau khusus.</small>
                    </div>

                    <div class="hr-text hr-text-left mt-4">Tanda Tangan Outlet</div>
                    <div class="mb-3">
                        <label class="form-label">Tanda Tangan Digital Outlet</label>
                        <div class="border" style="height: 150px; background: #f8f9fa;">
                            {{-- Placeholder for Signature Pad --}}
                            <p class="text-muted text-center py-5">Area untuk tanda tangan digital</p>
                        </div>
                        <small class="form-hint">Akan diisi dengan library tanda tangan digital (misal: Signature Pad).</small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Sales Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Inisialisasi DataTables setelah dokumen siap
    $(document).ready(function() {
        $('#salesOrderTable').DataTable({
            // Konfigurasi DataTables opsional
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json" // Bahasa Indonesia
            }
        });

        // JavaScript untuk menambah/menghapus produk di modal
        let productIndex = 1;
        document.getElementById('add-product-btn').addEventListener('click', function() {
            const productList = document.getElementById('product-list');
            const newItem = `
                <div class="row mb-3 product-item">
                    <div class="col-md-5">
                        <label class="form-label">Produk</label>
                        <select class="form-select" name="products[${productIndex}][id]">
                            <option value="">Pilih Produk</option>
                            <option value="1">Shampo A</option>
                            <option value="2">Kondisioner B</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Kuantitas</label>
                        <input type="number" class="form-control" name="products[${productIndex}][quantity]" value="1" min="1">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Harga Satuan</label>
                        <input type="text" class="form-control" name="products[${productIndex}][price]" value="100000" readonly>
                    </div>
                    <div class="col-md-1 d-flex align-items-end">
                        <button type="button" class="btn btn-danger btn-icon remove-product">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                        </button>
                    </div>
                </div>
            `;
            productList.insertAdjacentHTML('beforeend', newItem);
            productIndex++;
            attachRemoveListeners();
        });

        function attachRemoveListeners() {
            document.querySelectorAll('.remove-product').forEach(button => {
                button.onclick = function() {
                    this.closest('.product-item').remove();
                };
            });
        }
        attachRemoveListeners(); // Attach for initial items
    });
</script>
@endpush
@endsection
