<div class="form-group">
    <label>NIP</label>
    <select name="nip" class="form-control" id="js-example-single">
        <option value="">Selected Option</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->nip }}</option>
        @endforeach
    </select>
</div>

@foreach ($typefile as $item)
    <div class="form-group">
        <label>{{ $item->name }}</label>
        <input type="file" name="{{ $item->id }}" class="form-control">
    </div>
@endforeach


<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="{{ route('admin.employee.index') }}" class="btn btn-light">Cancel</a>
