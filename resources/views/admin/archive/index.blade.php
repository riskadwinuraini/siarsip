@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title d-flex justify-content-between">
                        <input type="search" placeholder="Cari NIP" class="form-control w-25">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Berkas</button>
                    </h4>

                    @include('admin.archive.modal')

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
                                  <a href="#" class="btn btn-info">Edit</a>
                                  <form action="{{ route('admin.archive.destroy', $item->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a href="{{ route('admin.archive.destroy', $item->id) }}" class="btn btn-danger">Hapus</a>
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