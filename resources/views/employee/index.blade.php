@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Arsip</h4>
            <div class="card-description">
                <a href="{{ route('employee.create') }}" class="btn btn-primary">Tambah Pegawai Baru</a>
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

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection