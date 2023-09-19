@props([
    'label' => '',
    'name' => '',
    'short' => ''
])

<div class="form-group">
    <label>{{ $label }}</label>
    <input type="text" name="{{ $name }}" class="form-control">
    <span class="text-muted mt-4">{{ $short ?? $slot }}</span>
</div>