@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Form pemberkasan
                    </div>
                    <form class="forms-sample" action="#" method="POST">
                        @csrf
                        @include('admin.filing.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection