@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Sales Order #SO001
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-update-delivery-so-detail" data-so-id="SO001">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 18a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-6h-2l-2 2v-4l-2 -2h-2v4l-2 -2h-2v6a2 2 0 0 0 2 2z" /><path d="M12 9l0 -6" /><path d="M15 6l-3 -3l-3 3" /></svg>
                        Update Kirim
                    </a>
                    <a href="{{ route('operasional_sales.sales_order') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar SO
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Informasi Umum Sales Order</h3>
            </div>
            <div class="card-body">
                <div class="datagrid">
                    <div class="datagrid-item">
                        <div class="datagrid-title">No. Sales Order</div>
                        <div class="datagrid-content">SO001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Outlet</div>
                        <div class="datagrid-content">Outlet Maju Jaya</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Tanggal Order</div>
                        <div class="datagrid-content">01 Juli 2025</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Status</div>
                        <div class="datagrid-content"><span class="badge bg-yellow me-1"></span> Pending ACC</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Total Nilai</div>
                        <div class="datagrid-content">Rp 1.500.000</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Program Diikuti</div>
                        <div class="datagrid-content">Inaura Salon Community (ISC)</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Sales</div>
                        <div class="datagrid-content">Sales A</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Waktu Kirim (DO)</div>
                        <div class="datagrid-content">Belum Terjadwal</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Daftar Barang yang Diorder</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter table-striped">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Kuantitas</th>
                                <th>Harga Satuan</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shampo A</td>
                                <td>5 Botol</td>
                                <td>Rp 100.000</td>
                                <td>Rp 500.000</td>
                            </tr>
                            <tr>
                                <td>Kondisioner B</td>
                                <td>10 Botol</td>
                                <td>Rp 85.000</td>
                                <td>Rp 850.000</td>
                            </tr>
                            <tr>
                                <td>Serum Rambut C</td>
                                <td>1 Pcs</td>
                                <td>Rp 150.000</td>
                                <td>Rp 150.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Detail Bonus & Diskon</h3>
            </div>
            <div class="card-body">
                <div class="datagrid">
                    <div class="datagrid-item">
                        <div class="datagrid-title">Bonus Produk</div>
                        <div class="datagrid-content">Beli 6 Shampo A gratis 1 Shampo A</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Diskon Penjualan</div>
                        <div class="datagrid-content">Diskon 10% (Reguler Salon Cash)</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanda Tangan Outlet</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">Tanda tangan digital outlet akan ditampilkan di sini.</p>
                <div class="border" style="height: 150px; background: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                    <img src="https://placehold.co/150x80/E0E0E0/000000?text=Tanda+Tangan" alt="Tanda Tangan Outlet" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Update Status Pengiriman (Duplikasi dari halaman pengiriman) --}}
<div class="modal modal-blur fade" id="modal-update-delivery-so-detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Status Pengiriman <span id="modal-so-id-detail"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">No. Sales Order</label>
                        <input type="text" class="form-control" id="delivery-so-id-detail" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Pengiriman</label>
                        <select class="form-select" name="status_pengiriman" id="status_pengiriman_detail">
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
                        <small class="form-hint">Akan diisi dengan library tanda tangan digital (misal: Signature Pad).</small>
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
    $(document).ready(function() {
        // Mengisi ID SO ke modal saat tombol "Update Kirim" di halaman detail SO diklik
        $('#modal-update-delivery-so-detail').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var soId = button.data('so-id'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('#modal-so-id-detail').text(soId);
            modal.find('#delivery-so-id-detail').val(soId);
        });
    });
</script>
@endpush
@endsection
