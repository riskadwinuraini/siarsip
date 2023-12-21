@extends('layouts.app')
@push('style')

@endpush
@push('scripts')
<link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="vendor/select2/dist/js/select2.min.js"></script>

@endpush


@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Show Data
                    </div>
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
                                <td width="20%">Jenis User</td>
                                <td width="1%">:</td>
                                <td >{{ $data_user->type_pegawai != null  ? ucwords($data_user->type_pegawai) : '-'}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Status</td>
                                <td width="1%">:</td>
                                <td >{{ ucwords($data_user->status) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="p-4">
                        @php
                            $file = \App\Models\TypeFile::where('id',$typefile->type_file_id)->first()->name;
                            $path = \Illuminate\Support\Str::slug($data_user->name).'/'.\Illuminate\Support\Str::slug($file).'/';
                        @endphp
                        <embed
                        src="{{ Storage::url($path. $typefile->file)}}"
                        type="application/pdf"
                        width="100%"
                        height="500px"
                    />
                    </div>
                </div>
                <div class="card-footer">

                    <a href="{{ route('admin.filing-pns.index') }}" class="btn btn-light">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
