@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Jenis Berkas PPPK</h4>
                    <h4 class="card-title d-flex justify-content-between">
                        <a href="{{ route('admin.jenis-pppk.create') }}" class="btn btn-primary">Tambah Berkas</a>
                    </h4>

                    {{-- @include('admin.archive.modal') --}}

                    <div class="card-description">
                    </div>
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
                            <th>
                                Terlampir
                            </th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($typeFiles as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                  <a href="{{ route('admin.jenis-pppk.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                  <form action="{{ route('admin.jenis-pppk.destroy', $item->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Hapus</button>
                                      {{-- <a href="{{ route('admin.archive.destroy', $item->id) }}" class="btn btn-danger">Hapus</a> --}}
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
    </div>
@endsection
