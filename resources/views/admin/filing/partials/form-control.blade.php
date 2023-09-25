<div class="form-group">
    <label>NIP</label>
    <input type="number" name="nip" class="form-control">
</div>

@foreach ($typefile as $item)
    <div class="form-group">
        <label>{{$item->name}}</label>
        <input type="file" name="nip" class="form-control">
    </div>
@endforeach


<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{ route('admin.employee.index') }}" class="btn btn-light">Cancel</a>
