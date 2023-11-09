@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Form Jenis Berkas
                    </div>
                    <form class="forms-sample" action="{{ route('admin.jenis-pppk.store') }}" method="POST">
                        @csrf
                        @include('admin.archive.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
