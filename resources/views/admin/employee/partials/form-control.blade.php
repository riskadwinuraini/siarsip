<div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>NIP</label>
    <input type="number" name="nip" class="form-control">
</div>
<div class="form-group">
    <label>Jenis PPPK</label>
    <select name="type_pppk" id="jenis_pppk" class="form-control">
        <option value="">Pilih</option>
        <option value="pns">PNS</option>
        <option value="p3k">P3K</option>
    </select>
</div>
<div class="form-group" name="work_unit" id="unit_kerja_div" style="display: none">
    <label>Unit Kerja</label>
    <input type="text" class="form-control">
</div>
<div class="form-group">
    <label>Jenis Kelamin</label>
    <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="L">
          Laki-laki
        <i class="input-helper"></i></label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="P">
        Perempuan
    <i class="input-helper"></i></label>
    </div>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
</div>
<div class="form-group">
    <label>No.hp</label>
    <input type="number" name="no" placeholder="628xxx" class="form-control">
</div>
<div class="form-group">
    <label>Jenis PPPK</label>
    <select name="status" id="jenis_pppk" class="form-control">
        <option value="">Pilih</option>
        <option value="pns">Pensiun</option>
        <option value="aktif">aktif</option>
    </select>
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