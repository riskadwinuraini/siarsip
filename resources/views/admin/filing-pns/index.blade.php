@extends('layouts.app')
@push('style')
    <style>
        input[type="checkbox"]:checked+label{ font-weight: bold; }

        input[type="checkbox"]:disabled+label
        {
            color:#ccc;
        }
    </style>
@endpush
@push('scripts')
<link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="vendor/select2/dist/js/select2.min.js"></script>

<script>
    $(function(){
        $('#nip').select2();
    })
</script>
<script>
    function onSelectOption(url,id) {

    }
    $(document).ready(function () {
        $('#nip').on('change',function() {
            console.log($(this).val());
            onSelectOption(,$(this).val());
        })
    })
</script>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        @include('components.notification')
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Pemberkasan</h4>
                {{-- <div class="card-description">
                    <a href="{{ route('admin.filing.create') }}" class="btn btn-primary">Tambah Pemberkasan Baru</a>
                </div> --}}
                <div class="row">
                    <div class="col-md-10">
                        <form action="{{ route('admin.filing.index') }}" method="GET">
                        <div class="form-group">
                            <label class="fw-bold">Search NIP</label>
                            <select name="nip" class="form-control" id="nip">
                                <option value="">Selected Option</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ request('nip') == $user->id ? 'selected' : '' }}>{{ $user->nip }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 align-self-center">
                        <button class="btn btn-primary w-100">Search</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if ($data_user != null)
                    <table class="table table-bordered table-responsive-sm">
                        <tbody>
                            <tr>
                                <td width="20%">NIP</td>
                                <td width="1%">:</td>
                                <td >{{ ucwords($data_user->nip) }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Nama Lengkap</td>
                                <td width="1%">:</td>
                                <td >{{ ucwords($data_user->name) }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Unit Kerja</td>
                                <td width="1%">:</td>
                                <td >{{ $data_user->work_unit != null  ? ucwords($data_user->work_unit) : '-'}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Status</td>
                                <td width="1%">:</td>
                                <td >{{ ucwords($data_user->status) }}</td>
                            </tr>
                        </tbody>
                    </table>
                @endif
            </div>
          <div class="card-body">
            <div class="row">
                @foreach ($typefile as $item)
                        <div class="col-md-10">
                            <div class="form-group">
                                <span class="card-title">{{ $item->name }}</label>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-2">
                                <div class="d-flex justify-content-end">
                                    <div class="">
                                        @if ($data_upload != null)
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" {{ in_array($item->id,$data_upload) ? 'checked' : '' }} readonly>
                                        @else
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" readonly>
                                        @endif
                                    </div>
                                    @role('admin')
                                        <div class="align-items-center">
                                            @if (request('nip') != null)
                                            <a href="{{ route('admin.filing.show',[request('nip'),$item->id]) }}"><i class="ti-eye text-primary p-2"></i></a>

                                            @else
                                                <a href="#"><i class="ti-eye text-primary p-2"></i></a>
                                            @endif
                                        </div>
                                        <div class="align-items-center">
                                            @if (request('nip') != null)
                                                <a href="{{ route('admin.filing.upload-edit',[request('nip'),$item->id]) }}"><i class="ti-pencil text-warning p-2"></i></a>

                                            @else
                                                <a href="#"><i class="ti-pencil text-warning p-2"></i></a>
                                            @endif
                                        </div>
                                        <div class="align-items-center">
                                            @if (request('nip') != null)
                                                <a href="{{ route('admin.filing.upload',[request('nip'),$item->id]) }}"><i class="ti-upload text-primary p-2"></i></a>
                                            @else
                                                <a href="#"><i class="ti-upload text-primary p-2"></i></a>

                                            @endif
                                        </div>
                                    @endrole

                                </div>
                        </div>
                    @endforeach
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
