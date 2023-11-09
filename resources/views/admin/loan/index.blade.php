@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    
  </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Transaksi</h4>
            <div class="card-description">
                <a href="{{ route('admin.loan.create') }}" class="btn btn-primary">Tambah Transaksi Baru</a>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Keterangan</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($files as $file)
                      <tr>
                        <td>{{ $file->user->name }}</td>
                        <td>{{ $file->information }}</td>
                        <td>{{ $file->loan_date }}</td>
                        <td>{{ $file->return_date }}</td>
                        <td>
                          <input type="checkbox" value="{{ $file->status }}" {{ ($file->status == 1) ? 'checked' : '' }} data-id="{{ $file->id }}" class="status-checkbox">
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    // Menambahkan event handler untuk perubahan status checkbox
    $('.status-checkbox').on('change', function() {
      var checkbox = $(this);
      var fileId = checkbox.data('id');
      var isChecked = checkbox.prop('checked') ? 1 : 0;
  
      // Kirim permintaan Ajax ke server untuk memperbarui status
      $.ajax({
        type: 'POST',
        url: '/admin/update-status', // Sesuaikan dengan URL rute Laravel Anda
        data: {
          _token: '{{ csrf_token() }}', // Tambahkan token CSRF untuk perlindungan
          fileId: fileId,
          status: isChecked
        },
        success: function(response) {
          // Tindakan yang akan diambil setelah permintaan berhasil
          console.log(response);
        },
        error: function(error) {
          // Tindakan yang akan diambil jika ada kesalahan dalam permintaan
          console.error(error);
        }
      });
    });
  });
  </script>
@endpush