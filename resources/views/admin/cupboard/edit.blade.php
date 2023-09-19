@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Form Edit lemari
                    </div>
                    <form class="forms-sample" method="POST" action="{{ route('admin.cupboard.update', $cupboard->id) }}">
                        @csrf
                        @method('patch')
                        @include('admin.cupboard.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection