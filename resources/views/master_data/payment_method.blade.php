@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Master Data Jenis Pembayaran
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-payment-method">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Jenis Pembayaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <div id="table-default" class="table-responsive">
                        <table class="table" id="paymentMethodTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jenis Pembayaran</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Create --}}
    <div class="modal modal-blur fade" id="modal-create-payment-method" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jenis Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-create-payment-method">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
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

    {{-- Modal Edit --}}
    <div class="modal modal-blur fade" id="modal-edit-payment-method" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Jenis Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-payment-method">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit-id">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="edit-name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" id="edit-description" rows="3"></textarea>
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
                var table = $('#paymentMethodTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('master_data.jenis_pembayaran') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });

                // Create
                $('#form-create-payment-method').submit(function(e) {
                    e.preventDefault();
                    var formData = $(this).serialize();

                    $.ajax({
                        url: "{{ route('master_data.jenis_pembayaran.store') }}",
                        method: 'POST',
                        data: formData,
                        success: function(response) {
                            $('#modal-create-payment-method').modal('hide');
                            $('#form-create-payment-method')[0].reset();
                            table.ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.success,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        error: function(xhr) {
                            var errorMessage = 'Terjadi kesalahan!';
                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                errorMessage = '';
                                $.each(errors, function(key, value) {
                                    errorMessage += value[0] + '<br>';
                                });
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                html: errorMessage
                            });
                        }
                    });
                });

                // Edit
                $(document).on('click', '.edit-btn', function() {
                    var id = $(this).data('id');
                    var url = "{{ route('master_data.jenis_pembayaran.edit', ':id') }}".replace(':id', id);

                    $.get(url, function(data) {
                        $('#edit-id').val(data.id);
                        $('#edit-name').val(data.name);
                        $('#edit-description').val(data.description);
                        $('#modal-edit-payment-method').modal('show');
                    });
                });

                // Update
                $('#form-edit-payment-method').submit(function(e) {
                    e.preventDefault();
                    var id = $('#edit-id').val();
                    var url = "{{ route('master_data.jenis_pembayaran.update', ':id') }}".replace(':id', id);
                    var formData = $(this).serialize();

                    $.ajax({
                        url: url,
                        method: 'PUT',
                        data: formData,
                        success: function(response) {
                            $('#modal-edit-payment-method').modal('hide');
                            table.ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.success,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        error: function(xhr) {
                            var errorMessage = 'Terjadi kesalahan!';
                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                errorMessage = '';
                                $.each(errors, function(key, value) {
                                    errorMessage += value[0] + '<br>';
                                });
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                html: errorMessage
                            });
                        }
                    });
                });

                // Delete
                $(document).on('click', '.delete-btn', function() {
                    var id = $(this).data('id');
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
                                url: "{{ route('master_data.jenis_pembayaran.destroy', ':id') }}"
                                    .replace(':id', id),
                                method: 'DELETE',
                                data: {
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    table.ajax.reload();
                                    Swal.fire(
                                        'Terhapus!',
                                        response.success,
                                        'success'
                                    );
                                },
                                error: function() {
                                    Swal.fire(
                                        'Gagal!',
                                        'Terjadi kesalahan saat menghapus data.',
                                        'error'
                                    );
                                }
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
