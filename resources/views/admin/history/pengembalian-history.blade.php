@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <a href="/admin/export/history-pengembalian" class="btn btn-primary">Export to Excel</a>
  </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
                @include('admin.history.common.pengembalian-history-table')
            </div>
          </div>
        </div>
      </div>
</div>
@endsection