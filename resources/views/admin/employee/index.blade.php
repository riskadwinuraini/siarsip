@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data User</h4>
             <div class="card-description">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('admin.admin.employee-pppk') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                              <div class="row">
                                <div class="col-lg-6">
                                    <label for="users">Unggah Pegawai PPPK</label>
                                      <input type="file" class="form-control" style="padding: 3px;" name="users" required />
                                </div>
                                <div class="col-md-6 align-self-center mt-4">
                                    <button type="submit" class="btn btn-success w-50" name="upload">Unggah</button>
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
                                    <label for="users">Unggah Pegawai PNS</label>
                                    <input type="file" class="form-control" style="padding: 3px;" name="users_pns" required />
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <button type="submit" class="btn btn-success w-50" name="upload">Unggah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped" id="exampleTable">
                <thead>
                  <tr>
                    <th>
                        Nama Pegawai
                    </th>
                    <th>
                        NIP
                    </th>
                    <th>
                      JK
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      No. Hp
                    </th>
                    <th>
                      Jenis Pegawai
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
                        <td>{{ $employee->type_pegawai }}</td>
                        <td>{{ $employee->status }}</td>
                        <td>
                          <form action="{{ route('admin.employee.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{ $employees->links()}}
          </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready(function () {
            // Inisialisasi DataTables dengan opsi pencarian
            var table = $('#exampleTable').DataTable({
                "paging": false, // Optional: Menonaktifkan paging jika sudah menggunakan pagination Laravel
            });
        });
  </script>
  
@endpush
