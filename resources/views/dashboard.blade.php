@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-tale">
                <div class="card-body">
                    <p class="mb-4">Today’s Bookings</p>
                    <p class="fs-30 mb-2">4006</p>
                    <p>10.00% (30 days)</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4">Total Bookings</p>
                    <p class="fs-30 mb-2">61344</p>
                    <p>22.00% (30 days)</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-light-blue">
            <div class="card-body">
                <p class="mb-4">Number of Meetings</p>
                <p class="fs-30 mb-2">34040</p>
                <p>2.00% (30 days)</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-light-danger">
            <div class="card-body">
                <p class="mb-4">Number of Clients</p>
                <p class="fs-30 mb-2">47033</p>
                <p>0.22% (30 days)</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Arsip</h4>
                <div class="card-description">
                    <a href="{{ route('archive.create') }}" class="btn btn-primary">Tambah Arsip Baru</a>
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