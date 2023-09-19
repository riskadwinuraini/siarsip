@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Lemari</h4>
            <div class="card-description">
                <a href="{{ route('admin.cupboard.create') }}" class="btn btn-primary">Tambah Lemari Baru</a>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                        No Lemari
                    </th>
                    <th>
                        Nama jenis lemari
                    </th>
                    <th>
                        Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cupboards as $cupboard)
                        <tr>
                          <td>{{ $cupboard->no }}</td>
                          <td>{{ $cupboard->name }}</td>
                          <td>
                            <a href="{{ route('admin.cupboard.edit', $cupboard->id) }}" class="btn btn-info">Ubah</a>

                            <form action="{{ route('admin.cupboard.destroy', $cupboard->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.cupboard.destroy', $cupboard->id) }}" class="btn btn-danger">Hapus</a>
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