@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Detail Produk: {{ $product->name }}
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('manajemen_produk.index') }}" class="btn btn-secondary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
                            </svg>
                            Kembali ke Daftar Produk
                        </a>
                        <button type="button" class="btn btn-success d-none d-sm-inline-block" id="btn-add-stock"
                            data-bs-toggle="modal" data-bs-target="#modal-add-stock">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Tambah Stok
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-4">
                    <div class="card card-md">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xl mb-3"
                                style="background-image: url({{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/128x128/E0E0E0/000000?text=Produk' }})"></span>
                            <h3 class="m-0 text-truncate">{{ $product->name }}</h3>
                            <div class="text-secondary">Kategori: {{ $product->category->name ?? '-' }}</div>
                            <div class="mt-3">
                                <span class="badge bg-success me-1"></span> Tersedia
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Produk</h3>
                        </div>
                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">UOM</div>
                                    <div class="datagrid-content">{{ $product->uom->name ?? '-' }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Harga Satuan</div>
                                    <div class="datagrid-content">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Stok Tersedia</div>
                                    <div class="datagrid-content">{{ $product->stock }} Unit</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Deskripsi</div>
                                    <div class="datagrid-content">{{ $product->description }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Tanggal Dibuat</div>
                                    <div class="datagrid-content">{{ $product->created_at->format('d F Y') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-6 col-lg-4">
                        {{-- Widget Kinerja Produk --}}
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-primary text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 7v4l3 3" />
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Total Terjual (Tahun Ini)
                                            </div>
                                            <div class="text-secondary">
                                                {{ number_format($totalSoldYear, 0, ',', '.') }} Unit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-success text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Total Penjualan (Tahun Ini)
                                            </div>
                                            <div class="text-secondary">
                                                Rp {{ number_format($totalSalesValueYear, 0, ',', '.') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-8">
                        {{-- Riwayat Penjualan Produk --}}
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                        <li class="nav-item">
                                            <a href="#tabs-history" class="nav-link active" data-bs-toggle="tab">Riwayat
                                                Penambahan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tabs-orders" class="nav-link" data-bs-toggle="tab">Riwayat
                                                Penjualan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tabs-history">
                                            <div class="table-responsive">
                                                <table class="table table-vcenter card-table" id="productLogTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal</th>
                                                            <th>Penambahan</th>
                                                            <th>Stok</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs-orders">
                                            <div class="table-responsive">
                                                <table class="table table-vcenter card-table" id="productOrderTable"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>No. Order</th>
                                                            <th>Tanggal</th>
                                                            <th>Pelanggan</th>
                                                            <th>Qty</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Stock --}}
    <div class="modal modal-blur fade" id="modal-add-stock" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Stok Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-add-stock">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Jumlah Stok Tambahan</label>
                            <input type="number" class="form-control" name="quantity" min="1" required
                                placeholder="Masukkan jumlah stok">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan Stok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Add Stock AJAX
                $('#form-add-stock').submit(function(e) {
                    e.preventDefault();
                    var formData = $(this).serialize();

                    $.ajax({
                        url: "{{ route('manajemen_produk.add_stock', $product->id) }}",
                        method: 'POST',
                        data: formData,
                        success: function(response) {
                            $('#modal-add-stock').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: response.success,
                                timer: 1500,
                                showConfirmButton: false
                            }).then(() => {
                                location.reload(); // Reload to reflect new stock
                            });
                        },
                        error: function(xhr) {
                            var errorMessage = 'Terjadi kesalahan sistem!';
                            if (xhr.status === 422) {
                                errors = xhr.responseJSON.errors;
                                errorMessage = '';
                                $.each(errors, function(key, value) {
                                    errorMessage += value[0] + '<br>';
                                });
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                html: errorMessage
                            });
                        }
                    });
                });

                // Product Log DataTable
                $('#productLogTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manajemen_produk.show', $product->id) }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'added_quantity',
                            name: 'added_quantity'
                        },
                        {
                            data: 'last_stock',
                            name: 'last_stock'
                        }
                    ]
                });

                // Product Order History DataTable
                $('#productOrderTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('manajemen_produk.show', $product->id) }}",
                        data: function(d) {
                            d.type = 'orders';
                        }
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'order_number',
                            name: 'orders.order_number',
                            render: function(data, type, row) {
                                let url = "{{ route('reports.penjualan_detail', ':id') }}".replace(
                                    ':id', row.order_id);
                                return '<a href="' + url + '" class="text-primary">' + data + '</a>';
                            }
                        },
                        {
                            data: 'order_date',
                            name: 'orders.created_at'
                        },
                        {
                            data: 'customer_name',
                            name: 'orders.customer_name'
                        },
                        {
                            data: 'quantity',
                            name: 'quantity',
                            className: 'text-center'
                        },
                        {
                            data: 'total_amount',
                            name: 'total_amount',
                            className: 'text-end'
                        }
                    ]
                });
            });
        </script>
    @endpush
@endsection
