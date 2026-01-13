@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col col-sm-12 col-md-6 col-lg-6">
                    <h2 class="page-title">
                        Manajemen Data Produk
                    </h2>
                </div>
                <div class=" d-print-none col-sm-12 col-md-6 col-lg-6" id="button-create-product">
                    <div class="btn-list justify-content-end">
                        <a href="#" class="btn btn-primary d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-product">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Produk Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            {{-- Widget untuk Ringkasan Data Produk --}}
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
                                        Total Produk Aktif
                                    </div>
                                    <div class="text-secondary">
                                        {{ $totalProducts }} Produk
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
                                        Produk Terlaris (Bulan Ini)
                                    </div>
                                    <div class="text-secondary">
                                        {{ $topSellingProductName }}
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M12 12v9" />
                                            <path d="M15 15l-3 3l-3 -3" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Produk Stok Rendah
                                    </div>
                                    <div class="text-secondary">
                                        {{ $lowStockCount }} Produk
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
                                        Total Nilai Stok
                                    </div>
                                    <div class="text-secondary">
                                        Rp {{ number_format($totalStockValue, 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Produk --}}
            <div class="row row-cards mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Penjualan Produk per Bulan</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-product-sales-monthly" style="height: 200px;">
                                <canvas id="productSalesMonthlyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Stok Produk per Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-product-stock-category" style="height: 200px;">
                                <canvas id="productStockCategoryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="productTable" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>UOM</th>
                                    <th>Stok Tersedia</th>
                                    <th>Harga Satuan</th>
                                    <th>Aksi</th>
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

    {{-- Modal Create Product --}}
    <div class="modal modal-blur fade" id="modal-create-product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-create-product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan nama produk"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="category_id" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Satuan Unit (UOM)</label>
                            <select class="form-select" name="uom_id" required>
                                <option value="">Pilih Satuan</option>
                                @foreach ($uoms as $uom)
                                    <option value="{{ $uom->id }}">{{ $uom->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" class="form-control" name="price"
                                placeholder="Masukkan harga satuan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok Tersedia</label>
                            <input type="number" class="form-control" name="stock" placeholder="Masukkan jumlah stok"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Deskripsi produk" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Produk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit Product --}}
    <div class="modal modal-blur fade" id="modal-edit-product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-product" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="name" id="edit-name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="category_id" id="edit-category_id" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Satuan Unit (UOM)</label>
                            <select class="form-select" name="uom_id" id="edit-uom_id" required>
                                <option value="">Pilih Satuan</option>
                                @foreach ($uoms as $uom)
                                    <option value="{{ $uom->id }}">{{ $uom->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" class="form-control" name="price" id="edit-price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok Tersedia</label>
                            <input type="number" class="form-control" name="stock" id="edit-stock" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" id="edit-description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Produk (Opsional)</label>
                            <input type="file" class="form-control" name="image" id="edit-image">
                            <small class="form-hint">Biarkan kosong jika tidak ingin mengubah gambar.</small>
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

    {{-- Modal Edit Product --}}
    <div class="modal modal-blur fade" id="modal-edit-product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-product" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="name" id="edit-name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="category_id" id="edit-category_id" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Satuan Unit (UOM)</label>
                            <select class="form-select" name="uom_id" id="edit-uom_id" required>
                                <option value="">Pilih Satuan</option>
                                @foreach ($uoms as $uom)
                                    <option value="{{ $uom->id }}">{{ $uom->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" class="form-control" name="price" id="edit-price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok Tersedia</label>
                            <input type="number" class="form-control" name="stock" id="edit-stock" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" id="edit-description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Produk (Opsional)</label>
                            <input type="file" class="form-control" name="image" id="edit-image">
                            <small class="form-hint">Biarkan kosong jika tidak ingin mengubah gambar.</small>
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
                $('#productTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('manajemen_produk.index') }}",
                    columns: [{
                            data: 'image',
                            name: 'image',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'category_name',
                            name: 'category.name'
                        },
                        {
                            data: 'uom_name',
                            name: 'uom_name'
                        },
                        {
                            data: 'stock',
                            name: 'stock'
                        },
                        {
                            data: 'price',
                            name: 'price',
                            className: 'text-end'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });

                // Helper function for error handling
                function handleErrors(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '';
                        $.each(errors, function(key, value) {
                            errorMessage += value[0] + '<br>';
                        });
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            html: errorMessage
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan sistem!'
                        });
                    }
                }

                // Create Product AJAX
                $('#form-create-product').submit(function(e) { // Ensure form ID is added to create modal form
                    e.preventDefault();
                    var formData = new FormData(this);

                    $.ajax({
                        url: "{{ route('manajemen_produk.store') }}",
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $('#modal-create-product').modal('hide');
                            $('#productTable').DataTable().ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: response.success,
                                timer: 1500,
                                showConfirmButton: false
                            });
                            $('#form-create-product')[0].reset();
                        },
                        error: function(xhr) {
                            handleErrors(xhr);
                        }
                    });
                });

                // Edit Product AJAX
                $('#form-edit-product').submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    var url = $(this).attr('action');

                    $.ajax({
                        url: url,
                        method: 'POST', // Spoofed to PUT via _method
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $('#modal-edit-product').modal('hide');
                            $('#productTable').DataTable().ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: response.success,
                                timer: 1500,
                                showConfirmButton: false
                            });
                        },
                        error: function(xhr) {
                            handleErrors(xhr);
                        }
                    });
                });

                // Edit Button Click
                $(document).on('click', '.edit-btn', function() {
                    var id = $(this).data('id');
                    var url = "{{ route('manajemen_produk.edit', ':id') }}".replace(':id',
                        id);
                    var updateUrl = "{{ route('manajemen_produk.update', ':id') }}".replace(
                        ':id', id);

                    $('#form-edit-product').attr('action', updateUrl);

                    $.get(url, function(data) {
                        $('#edit-name').val(data.name);
                        $('#edit-category_id').val(data.category_id);
                        $('#edit-uom_id').val(data.uom_id);
                        $('#edit-price').val(data.price);
                        $('#edit-stock').val(data.stock);
                        $('#edit-description').val(data.description);
                        $('#modal-edit-product').modal('show');
                    });
                });

                // Delete Product
                $(document).on('click', '.delete-btn', function(e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    var url = "{{ route('manajemen_produk.destroy', ':id') }}".replace(':id',
                        id);

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: url,
                                method: 'DELETE',
                                data: {
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    $('#productTable').DataTable().ajax.reload();
                                    Swal.fire(
                                        'Terhapus!',
                                        response.success,
                                        'success'
                                    )
                                },
                                error: function(xhr) {
                                    handleErrors(xhr);
                                }
                            });
                        }
                    })
                });

                // Chart: Penjualan Produk per Bulan
                const productSalesMonthlyCtx = document.getElementById('productSalesMonthlyChart').getContext('2d');
                new Chart(productSalesMonthlyCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov',
                            'Des'
                        ],
                        datasets: [{
                            label: 'Unit Terjual',
                            data: @json($chartSalesData),
                            borderColor: '#007bff',
                            backgroundColor: 'rgba(0, 123, 255, 0.2)',
                            fill: true,
                            tension: 0.3
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false,
                            },
                            title: {
                                display: false,
                                text: 'Penjualan Produk per Bulan'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Chart: Stok Produk per Kategori
                const productStockCategoryCtx = document.getElementById('productStockCategoryChart').getContext('2d');
                new Chart(productStockCategoryCtx, {
                    type: 'bar',
                    data: {
                        labels: @json($chartStockLabels),
                        datasets: [{
                            label: 'Stok Tersedia (Unit)',
                            data: @json($chartStockData),
                            backgroundColor: ['#28a745', '#ffc107', '#17a2b8', '#dc3545', '#6c757d',
                                '#007bff', '#6610f2'
                            ],
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false,
                            },
                            title: {
                                display: false,
                                text: 'Stok Produk per Kategori'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    @endpush
@endsection
