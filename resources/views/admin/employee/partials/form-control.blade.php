<div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="text-danger">
     {{ $message }}
    </p>
    @enderror
</div>
<div class="form-group">
    <label>NIP</label>
    <input type="number" name="nip" class="form-control @error('number') is-invalid @enderror">
    @error('nip')
    <p class="text-danger">
     {{ $message }}
    </p>
    @enderror
</div>
<div class="form-group">
    <label>Jenis PPPK</label>
    <select name="type_pppk" id="jenis_pppk" class="form-control @error('type_pppk') is-invalid @enderror">
        <option value="">Pilih</option>
        <option value="pns">PNS</option>
        <option value="p3k">P3K</option>
    </select>
    @error('type_pppk')
    <p class="text-danger">
     {{ $message }}
    </p>
    @enderror
</div>
<div class="form-group"  id="unit_kerja_div" class="form-control @error('work_unit') is-invalid @enderror">
    <label>Unit Kerja</label>
    <input type="text" class="form-control " name="work_unit">
    @error('work_unit')
    <p class="text-danger">
     {{ $message }}
    </p>
    @enderror
</div>
<div class="form-group">
    <label>Jenis Kelamin</label>
    <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="L" @error('radio') is-invalid @enderror>
          Laki-laki
          @error('gender')
          <p class="text-danger">
           {{ $message }}
          </p>
          @enderror
        <i class="input-helper"></i></label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="P" @error('type_PPPK') is-invalid @enderror>
        Perempuan
        @error('gender')
        <p class="text-danger">
         {{ $message }}
        </p>
        @enderror
    <i class="input-helper"></i></label>
    </div>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
    @error('email')
    <p class="text-danger">
     {{ $message }}
    </p>
    @enderror
</div>
<div class="form-group">
    <label>No.hp</label>
    <input type="number" name="no" placeholder="628xxx" class="form-control @error('number') is-invalid @enderror">
    @error('no')
    <p class="text-danger">
     {{ $message }}
    </p>
    @enderror
</div>
<div class="form-group">
    <label>status</label>
    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
        <option value="">Pilih</option>
        <option value="pensiun">Pensiun</option>
        <option value="aktif">aktif</option>
    </select>
    @error('status')
        <p class="text-danger">
         {{ $message }}
        </p>
        @enderror
</div>

<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{ route('admin.employee.index') }}" class="btn btn-light">Cancel</a>

@push('scripts')
    <script>
     $(document).ready(function () {
        // Mendapatkan referensi elemen dropdown
        var jenisPppkDropdown = $("#jenis_pppk");

        // Mendapatkan referensi elemen div "Unit Kerja"
        var unitKerjaDiv = $("#unit_kerja_div");

        jenisPppkDropdown.change(function () {
            unitKerjaDiv.toggle(jenisPppkDropdown.val() === "p3k");
        });
    });
    </script>
@endpush
