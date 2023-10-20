@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
  </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="" style="width: 200px">
                        <a href="export/history-pinjaman" class="btn btn-primary">Export to Excel</a>
                    </div>
                    <div c;a>
                        <div class="row">
                            <div class="col-md-8">
                                <form action="{{ route('admin.loan.story') }}" method="GET">
                                <select name="filter" class="form-control w-100" id="">
                                    <option value="">Pilih Data</option>
                                    <option value="minggu-ini" {{ request('filter') == 'minggu-ini' ? 'selected' : '' }}>Minggu Ini</option>
                                    <option value="bulan-ini" {{ request('filter') == 'bulan-ini' ? 'selected' : '' }}>Bulan Ini</option>
                                    <option value="tahun-ini" {{ request('filter') == 'tahun-ini' ? 'selected' : '' }}>Tahun Ini</option>
                                </select>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <div class="d-flex">
                                    <button class="btn btn-primary">Filter</button>

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-body">
            <div class="table-responsive">
             @include('admin.history.common.loan-history-table')
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
