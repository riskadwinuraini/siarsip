<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control">
</div>
<div class="form-group">
    <label>NIP</label>
    <input type="text" class="form-control">
</div>
<div class="form-group">
    <label>Unit Kerja</label>
    <input type="text" class="form-control">
</div>
<div class="form-group">
    <label>Jenis PPPK</label>
    <input type="text" class="form-control">
</div>
<div class="form-group">
    <label>Jenis Kelamin</label>
    <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="L">
          Laki-laki
        <i class="input-helper"></i></label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="P">
        Perempuan
    <i class="input-helper"></i></label>
    </div>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control">
</div>
<div class="form-group">
    <label>No.hp</label>
    <input type="number" placeholder="628xxx" class="form-control">
</div>
<div class="form-group">
    <label>Status</label>
    <input type="text" class="form-control">
</div>

<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{ route('employee.index') }}" class="btn btn-light">Cancel</a>