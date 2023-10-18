@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Arsip</h4>
            <div class="card-description">
                <a href="{{ route('admin.employee.create') }}" class="btn btn-primary">Tambah Pegawai Baru</a>
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
          </div>
        </div>
    </div>
</div>
@endsection