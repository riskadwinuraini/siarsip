@extends('layouts.app')
@push('scripts')
<link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="vendor/select2/dist/js/select2.min.js"></script>

<script>
    $(function(){
        $('#js-example-single').select2();
    })
</script>
@endpush


@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Form pemberkasan
                    </div>
                    <form class="forms-sample" action="{{ route('admin.proccessCreateDocument') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.filing.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection