@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Master Program
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-program">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Tambah Program
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        {{-- Widget untuk Ringkasan Data Program --}}
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
                                    Total Program Aktif
                                </div>
                                <div class="text-secondary">
                                    4 Program
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Program Mendatang
                                </div>
                                <div class="text-secondary">
                                    1 Program
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Anda bisa menambahkan widget lain di sini --}}
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="programTable" class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Periode</th>
                                <th>Deskripsi</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Inaura Salon Community (ISC)</td>
                                <td>Jan 2025 - Des 2025</td>
                                <td>Program loyalitas untuk salon anggota komunitas Inaura.</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Infinite Saving Salon (ISS)</td>
                                <td>Apr 2025 - Sep 2025</td>
                                <td>Program diskon khusus untuk pembelian dalam jumlah besar.</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Inaura Berkah Toko (IBT)</td>
                                <td>Mar 2025 - Agu 2025</td>
                                <td>Program insentif untuk toko yang mencapai target penjualan.</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Tambah Program --}}
<div class="modal modal-blur fade" id="modal-add-program" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Program Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Program</label>
                        <input type="text" class="form-control" name="nama_program" placeholder="Masukkan nama program">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Periode Mulai</label>
                            <input type="date" class="form-control" name="periode_mulai">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Periode Selesai</label>
                            <input type="date" class="form-control" name="periode_selesai">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Program</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Jelaskan detail program"></textarea>
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
        $('#programTable').DataTable({
            // Konfigurasi DataTables opsional
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json" // Bahasa Indonesia
            }
        });
    });
</script>
@endpush

@endsection
