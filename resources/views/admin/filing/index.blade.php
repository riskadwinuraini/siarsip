@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Pemberkasan</h4>
            <div class="card-description">
                <a href="{{ route('admin.filing.create') }}" class="btn btn-primary">Tambah Pemberkasan Baru</a>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                        Nama Pegawai
                    </th>
                    <th>
                        Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($employees as $employee)
                      <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->nip }}</td>
                        <td>
                          <form action="{{ route('admin.employee.destroy', $employee->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <a href="{{ route('admin.employee.destroy', $employee->id) }}" class="btn btn-danger">Hapus</a>
                          </form>
                        </td>
                      </tr>
                  @endforeach --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection