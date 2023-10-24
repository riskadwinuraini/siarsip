@extends('layouts.app')
@push('style')
    <style>
        .hidden {
            display: none;
        }
        .block{
            display: block;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#pegawai').on('click', function(e) {
                e.preventDefault(); // Menghentikan aksi default (navigasi ke href)

                $('#data-berkas-masuk').addClass('hidden'); // Toggle class 'hidden'
                $('#data-pegawai').toggleClass('hidden'); // Toggle class 'hidden'
                $('#data-berkas-keluar').addClass('hidden'); // Toggle class 'hidden'
                $('#data-total-berkas').addClass('hidden'); // Toggle class 'hidden'


            });
        })
        $(document).ready(function() {
            $('#berkas-masuk').on('click', function(e) {
                e.preventDefault(); // Menghentikan aksi default (navigasi ke href)

                $('#data-berkas-masuk').toggleClass('hidden'); // Toggle class 'hidden'
                $('#data-pegawai').addClass('hidden'); // Toggle class 'hidden'
                $('#data-total-berkas').addClass('hidden'); // Toggle class 'hidden'
                $('#data-berkas-keluar').addClass('hidden'); // Toggle class 'hidden'

            });
        })
        $(document).ready(function() {
            $('#berkas-keluar').on('click', function(e) {
                e.preventDefault(); // Menghentikan aksi default (navigasi ke href)

                $('#data-berkas-keluar').toggleClass('hidden'); // Toggle class 'hidden'
                $('#data-berkas-masuk').addClass('hidden'); // Toggle class 'hidden'
                $('#data-pegawai').addClass('hidden'); // Toggle class 'hidden'
                $('#data-total-berkas').addClass('hidden'); // Toggle class 'hidden'
            });
        })
        $(document).ready(function() {
            $('#total-berkas').on('click', function(e) {
                e.preventDefault(); // Menghentikan aksi default (navigasi ke href)

                $('#data-total-berkas').toggleClass('hidden'); // Toggle class 'hidden'
                $('#data-berkas-keluar').addClass('hidden'); // Toggle class 'hidden'
                $('#data-berkas-masuk').addClass('hidden'); // Toggle class 'hidden'
                $('#data-pegawai').addClass('hidden'); // Toggle class 'hidden'
            });
        })

    </script>
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <a href="" class="text-decoration-none" id="pegawai">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Pegawai</p>
                        <p class="fs-30 mb-2">{{ $count_user }}</p>
                        <p>2023-2028</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="" class="text-decoration-none" id="berkas-masuk">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Berkas masuk</p>
                        <p class="fs-30 mb-2">61344</p>
                        <p>2023-2028</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="" class="text-decoration-none" id="berkas-keluar">
                <div class="card card-light-blue">
                <div class="card-body">
                    <p class="mb-4">Berkas keluar</p>
                    <p class="fs-30 mb-2">34040</p>
                    <p>2023-2028</p>
                </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="" class="text-decoration-none" id="total-berkas">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Total berkas</p>
                        <p class="fs-30 mb-2">{{ $count_typeFiles }}</p>
                        <p>2023-2028</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 my-4 hidden" id="data-pegawai">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pegawai</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                                  Nama Pegawai
                              </th>
                              <th>
                                  NIP
                              </th>
                              <th>
                                Jenis Kelamin
                              </th>
                              <th>
                                Email
                              </th>
                              <th>
                                No.Hp
                              </th>
                              <th>
                                  Status
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                  <td>{{ $employee->name }}</td>
                                  <td>{{ $employee->nip }}</td>
                                  <td>{{ $employee->gender }}</td>
                                  <td>{{ $employee->email }}</td>
                                  <td>{{ $employee->no }}</td>
                                  <td><span class="badge badge-primary">{{ $employee->status }}</span></td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 my-4 hidden" id="data-berkas-masuk">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Bekas Masuk</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Pengembalian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengembalian as $file)
                                <tr>
                                <td>{{ $file->user->name }}</td>
                                <td>{{ $file->loan_date }}</td>
                                <td>{{ $file->return_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 my-4 hidden" id="data-berkas-keluar">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Bekas Keluar</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Pengembalian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $file)
                                <tr>
                                <td>{{ $file->user->name }}</td>
                                <td>{{ $file->loan_date }}</td>
                                <td>{{ $file->return_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 my-4 hidden" id="data-total-berkas">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Total Data Bekas Keluar</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                                  No.
                              </th>
                              <th>
                                Jenis Berkas
                              </th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($typeFiles as $item)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $item->name }}</td>
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
