@extends('layouts.app') {{-- Asumsi ada layout dasar Tabler di layouts/app.blade.php --}}

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Master Diskon
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-diskon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Tambah Diskon
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        {{-- Widget untuk Ringkasan Data Diskon --}}
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
                                    Total Jenis Diskon
                                </div>
                                <div class="text-secondary">
                                    7 Jenis Diskon
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Diskon Tertinggi
                                </div>
                                <div class="text-secondary">
                                    Agen (25%)
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
                    <table id="diskonTable" class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Jenis Diskon</th>
                                <th>Persentase</th>
                                <th>Keterangan</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reguler Salon Cash/COD</td>
                                <td>10%</td>
                                <td>Maksimal diskon untuk Salon (Cash/COD)</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Reguler Salon Kredit</td>
                                <td>5%</td>
                                <td>Maksimal diskon untuk Salon (Kredit)</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Reguler Toko Cash/COD</td>
                                <td>15%</td>
                                <td>Maksimal diskon untuk Toko (Cash/COD)</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Reguler Toko Kredit</td>
                                <td>10%</td>
                                <td>Maksimal diskon untuk Toko (Kredit)</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Program (ISC Cash/COD)</td>
                                <td>15%</td>
                                <td>Diskon menyesuaikan program ISC (Cash/COD)</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Agen</td>
                                <td>25%</td>
                                <td>Diskon khusus untuk Agen</td>
                                <td>
                                    <a href="#">Edit</a> | <a href="#" class="text-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Khusus</td>
                                <td>Menyesuaikan</td>
                                <td>Diskon khusus untuk kondisi tertentu</td>
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

{{-- Modal Tambah Diskon --}}
<div class="modal modal-blur fade" id="modal-add-diskon" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Diskon Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Jenis Diskon</label>
                        <input type="text" class="form-control" name="jenis_diskon" placeholder="Contoh: Reguler Salon Cash/COD">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Persentase Diskon</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="persentase" placeholder="Contoh: 10" min="0" max="100">
                            <span class="input-group-text">%</span>
                        </div>
                        <small class="form-hint">Isi '0' atau 'Menyesuaikan' jika tidak dalam persentase.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="3" placeholder="Jelaskan detail diskon"></textarea>
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

<script>
    // Inisialisasi DataTables setelah dokumen siap
    $(document).ready(function() {
        $('#diskonTable').DataTable({
            // Konfigurasi DataTables opsional
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json" // Bahasa Indonesia
            }
        });
    });
</script>
@endpush
@endsection
