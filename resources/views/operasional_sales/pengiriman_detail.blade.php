@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Pengiriman #DO001 (GPK001)
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('operasional_sales.pengiriman') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar Pengiriman
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
                <h3 class="card-title">Informasi Pengiriman</h3>
            </div>
            <div class="card-body">
                <div class="datagrid">
                    <div class="datagrid-item">
                        <div class="datagrid-title">No. Pengiriman (DO)</div>
                        <div class="datagrid-content">DO001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">No. PO</div>
                        <div class="datagrid-content">PO001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">GPK</div>
                        <div class="datagrid-content">GPK001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">RPK</div>
                        <div class="datagrid-content">RPK001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Tanggal Pengiriman</div>
                        <div class="datagrid-content">03 Juli 2025</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Status Pengiriman</div>
                        <div class="datagrid-content"><span class="badge bg-success me-1"></span> Terkirim</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Kurir/Pengirim</div>
                        <div class="datagrid-content">Delivery Team 1</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Catatan Pengiriman</div>
                        <div class="datagrid-content">Barang diterima oleh Ibu Ani.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Barang yang Dikirim</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter table-striped">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Kuantitas</th>
                                <th>Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Beras 5kg Premium</td>
                                <td>5</td>
                                <td>Karung</td>
                            </tr>
                            <tr>
                                <td>Minyak Goreng 2 Liter</td>
                                <td>10</td>
                                <td>Botol</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Bukti Pengiriman</h3>
            </div>
            <div class="card-body text-center">
                <p class="text-muted">Foto bukti pengiriman:</p>
                <img src="https://placehold.co/300x200/E0E0E0/000000?text=Foto+Pengiriman" alt="Foto Pengiriman" class="img-fluid rounded mb-3">
                <p class="text-muted">Tanda tangan penerima:</p>
                <img src="https://placehold.co/150x80/E0E0E0/000000?text=Tanda+Tangan" alt="Tanda Tangan Penerima" class="img-fluid rounded">
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat Status Pengiriman</h3>
            </div>
            <div class="card-body">
                <div class="timeline timeline-simple">
                    <div class="timeline-item">
                        <div class="timeline-point"></div>
                        <div class="timeline-event">
                            <div class="timeline-event-title">Pengiriman Dibuat</div>
                            <div class="timeline-event-meta">02 Juli 2025, 16:00 WIB</div>
                            <div class="timeline-event-content">Pengiriman untuk SO002 dijadwalkan.</div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-point"></div>
                        <div class="timeline-event">
                            <div class="timeline-event-title">Dalam Perjalanan</div>
                            <div class="timeline-event-meta">03 Juli 2025, 08:00 WIB</div>
                            <div class="timeline-event-content">Barang sedang dalam perjalanan menuju Outlet Sejahtera.</div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-point"></div>
                        <div class="timeline-event">
                            <div class="timeline-event-title">Terkirim</div>
                            <div class="timeline-event-meta">03 Juli 2025, 10:00 WIB</div>
                            <div class="timeline-event-content">Pengiriman berhasil diselesaikan dan diterima oleh outlet.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
