@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Task Kunjungan #TASK001
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('operasional_sales.task_management') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Manajemen Task
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
                <h3 class="card-title">Informasi Task</h3>
            </div>
            <div class="card-body">
                <div class="datagrid">
                    <div class="datagrid-item">
                        <div class="datagrid-title">ID Task</div>
                        <div class="datagrid-content">TASK001</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Sales</div>
                        <div class="datagrid-content">Sales A</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Outlet</div>
                        <div class="datagrid-content">Outlet Maju Jaya</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Tanggal Task</div>
                        <div class="datagrid-content">05 Juli 2025</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Target Penjualan</div>
                        <div class="datagrid-content">Rp 5.000.000</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Target Kategori Produk</div>
                        <div class="datagrid-content">100 unit</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Status Check-in</div>
                        <div class="datagrid-content"><span class="badge bg-success me-1"></span> Check-in (05 Juli 2025, 09:30 WIB)</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Status Order</div>
                        <div class="datagrid-content">Order Dibuat (SO001)</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Alasan No Order</div>
                        <div class="datagrid-content">-</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Foto Kunjungan</h3>
            </div>
            <div class="card-body text-center">
                <p class="text-muted">Foto kunjungan akan ditampilkan di sini.</p>
                <img src="https://placehold.co/300x200/E0E0E0/000000?text=Foto+Kunjungan" alt="Foto Kunjungan" class="img-fluid rounded">
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Log Aktivitas Task</h3>
            </div>
            <div class="card-body">
                <div class="timeline timeline-simple">
                    <div class="timeline-item">
                        <div class="timeline-point"></div>
                        <div class="timeline-event">
                            <div class="timeline-event-title">Task Dibuat</div>
                            <div class="timeline-event-meta">04 Juli 2025, 15:00 WIB oleh Admin</div>
                            <div class="timeline-event-content">Task kunjungan untuk Sales A ke Outlet Maju Jaya dibuat.</div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-point"></div>
                        <div class="timeline-event">
                            <div class="timeline-event-title">Sales Check-in</div>
                            <div class="timeline-event-meta">05 Juli 2025, 09:30 WIB oleh Sales A</div>
                            <div class="timeline-event-content">Sales A berhasil check-in di lokasi Outlet Maju Jaya.</div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-point"></div>
                        <div class="timeline-event">
                            <div class="timeline-event-title">Sales Order Dibuat</div>
                            <div class="timeline-event-meta">05 Juli 2025, 10:45 WIB oleh Sales A</div>
                            <div class="timeline-event-content">Sales Order SO001 berhasil dibuat untuk Outlet Maju Jaya.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
