@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Arsip</h4>
            <div class="card-description">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('admin.admin.employee-pppk') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="users">Upload Pegawai P3K</label>
                                    <input type="file" class="form-control" style="padding: 3px;" name="users" required />
                                </div>
                                <div class="col-md-6 align-self-center mt-4">
                                    <button type="submit" class="btn btn-success w-50" name="upload">Upload</button>
                                </div>
                            </div>
                        </form>
                        {{-- <a href="{{ route('admin.employee.create') }}" class="btn btn-primary">Tambah Pegawai Baru</a> --}}
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('admin.admin.employee-pns') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="users">Upload Pegawai PNS</label>
                                    <input type="file" class="form-control" style="padding: 3px;" name="users_pns" required />
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <button type="submit" class="btn btn-success w-50" name="upload">Upload</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
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
                    <th>
                        Action
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
                        <td>{{ $employee->status }}</td>
                        <td>
                          <form action="{{ route('admin.employee.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{ $employees->links() }}
          </div>
        </div>
    </div>
</div>
@endsection
