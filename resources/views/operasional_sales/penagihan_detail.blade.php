@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Penagihan #INV001
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('operasional_sales.penagihan') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar Penagihan
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
                <h3 class="card-title">Informasi Tagihan</h3>
            </div>
            <div class="card-body">
                <div class="datagrid">
                    <div class="datagrid-item">
                        <div class="datagrid-title">No. Invoice/SO</div>
                        <div class="datagrid-content">INV001 (SO001)</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">RPK</div>
                        <div class="datagrid-content">RPK001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Total Tagihan</div>
                        <div class="datagrid-content">Rp 1.500.000</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Tanggal Jatuh Tempo</div>
                        <div class="datagrid-content">15 Juli 2025</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Status Pembayaran</div>
                        <div class="datagrid-content"><span class="badge bg-warning me-1"></span> Belum Lunas</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Sales Terkait</div>
                        <div class="datagrid-content">Sales A</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Riwayat Pembayaran</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal Pembayaran</th>
                                <th>Jumlah Pembayaran</th>
                                <th>Metode Pembayaran</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Belum ada pembayaran dicatat.</td>
                            </tr>
                            {{-- Contoh data jika sudah ada pembayaran --}}
                            {{--
                            <tr>
                                <td>01 Juli 2025</td>
                                <td>Rp 500.000</td>
                                <td>Cash</td>
                                <td>Pembayaran sebagian.</td>
                            </tr>
                            --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Catatan Penagihan</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">Catatan tambahan mengenai penagihan ini.</p>
                <textarea class="form-control" rows="3" readonly>Outlet berjanji akan melunasi pada tanggal 10 Juli 2025.</textarea>
            </div>
        </div>
    </div>
</div>
@endsection
