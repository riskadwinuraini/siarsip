@extends('layouts.app')
@push('scripts')
<link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="vendor/select2/dist/js/select2.min.js"></script>

<script>
    $(function(){
        $('#user_id').select2();
    })
</script>
@endpush
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Form tambah Pinjaman
                </div>
                <form class="forms-sample" action="{{ route('admin.loan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>NIP</label>
                        <select name="user_id" class="form-control" id="user_id">
                            <option value="0">Pilih NIP</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->nip }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="nama" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="text" id="no" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="information">Keterangan</label>
                        <textarea name="information" id="information" cols="30" rows="10" class="form-control" placeholder="Masukkan jenis dokumen yang dipinjam..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjaman</label>
                        <input type="date" name="loan_date" id="tanggalPinjaman" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" id="jumlahHari" disabled class="form-control w-50" placeholder="Masukkan jumlah hari pinjaman...">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="return_date" id="tanggalPengembalian" readonly class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                </form>
            </div>
        </div>
      </div>
</div>
@endsection

@push('scripts')
    <script>

    $(function(){

        // inisialisasi
        $('#user_id').on('change', function(){

            var id = $(this).val();
            $.ajax({
                url: "{{ route('admin.user.fetch', ':id') }}".replace(':id', id),
                dataType: 'json',
                type: 'GET',
                success: function(response){
                    // console.log(response);
                    $('#nama').val(response.nama);
                    $('#no').val(response.no);
                }
            });


        })


        var jumlahHari = $('#jumlahHari');

        $("#tanggalPinjaman").on("change", function() {
            jumlahHari.attr('disabled', false);

            jumlahHari.on('input', function(){
                updateTanggalPengembalian();
            });
        });

        function updateTanggalPengembalian() {
            var tanggalPinjaman = $("#tanggalPinjaman").val();
            var jumlahHari = parseInt($("#jumlahHari").val());

            if (tanggalPinjaman && !isNaN(jumlahHari)) {
                var tanggal = new Date(tanggalPinjaman);
                tanggal.setDate(tanggal.getDate() + jumlahHari);

                var tahun = tanggal.getFullYear();
                var bulan = String(tanggal.getMonth() + 1).padStart(2, '0');
                var hari = String(tanggal.getDate()).padStart(2, '0');

                var tanggalPengembalian = tahun + "-" + bulan + "-" + hari;
                $("#tanggalPengembalian").val(tanggalPengembalian);
            } else {
                $("#tanggalPengembalian").val("");
            }
        }

    })
    </script>
@endpush
