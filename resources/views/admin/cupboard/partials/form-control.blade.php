<div class="form-group">
    <label>No Lemari</label>
    <input type="text" name="no" class="form-control" value="{{ old('no') ?? $cupboard->no }}">
</div>
<div class="form-group">
    <label>Nama jenis lemari</label>
    <input type="text" name="name" class="form-control" value="{{ old('name') ?? $cupboard->name }}">
</div>

<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{ route('admin.employee.index') }}" class="btn btn-light">Cancel</a>