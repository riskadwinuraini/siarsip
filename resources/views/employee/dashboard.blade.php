@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
            <table class="table table-bordered table-responsive-sm">
                <tbody>
                    <tr>
                        <td width="20%">NIP</td>
                        <td width="1%">:</td>
                        <td >{{ auth()->user()->nip }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Nama Lengkap</td>
                        <td width="1%">:</td>
                        <td >{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Unit Kerja</td>
                        <td width="1%">:</td>
                        <td >{{ auth()->user()->work_unit != null  ? auth()->user()->work_unit : '-'}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Status</td>
                        <td width="1%">:</td>
                        <td >{{ auth()->user()->status }}</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>

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
@endsection