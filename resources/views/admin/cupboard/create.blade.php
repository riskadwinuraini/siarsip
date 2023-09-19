@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Form tambah lemari
                    </div>
                    <form class="forms-sample" method="POST" action="{{ route('admin.cupboard.store') }}">
                        @csrf
                        @include('admin.cupboard.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection