@props([
    'label' => '',
    'name' => '',
    'short' => '',
    'value' => ''
])

<div class="form-group">
    <label>{{ $label }}</label>
    <input type="text" name="{{ $name }}" value="{{ $value }}" class="form-control @error($name) is-invalid @enderror">
    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <span class="text-muted mt-4">{{ $short ?? $slot }}</span>
</div>
