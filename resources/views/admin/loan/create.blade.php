@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Form tambah Pinjaman
                </div>
                <form class="forms-sample" action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <select name="" class="form-control" id="">
                            <option value="0">Pilih nama</option>
                        </select>
                    </div>
                    <x-form label="No.Handphone" name="nama" />
                    <div class="form-group">
                        <label for="information">Keterangan</label>
                        <textarea name="information" id="information" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjaman</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
      </div>
</div>
@endsection