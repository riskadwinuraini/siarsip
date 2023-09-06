@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Lemari</h4>
            <div class="card-description">
                <a href="{{ route('cupboard.create') }}" class="btn btn-primary">Tambah Lemari Baru</a>
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

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection