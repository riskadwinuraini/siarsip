@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data kembali arsip</h4>
            <div class="card-description">
                <a href="{{ route('admin.loan.create') }}" class="btn btn-primary">Tambah Pinjaman Baru</a>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Keterangan</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Action</th>
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
@endsection