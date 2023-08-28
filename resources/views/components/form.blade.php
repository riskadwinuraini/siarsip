@props([
    'label' => '',
    'name' => '',
    'short' => ''
])

<div class="form-group">
    <label>{{ $label }}</label>
    <input type="file" name="{{ $name }}" class="file-upload-default">
    <div class="input-group col-xs-12">
      <input type="text" class="form-control file-upload-info" >
      <span class="input-group-append">
        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
      </span>
    </div>
    <span class="text-muted mt-4">{{ $short ?? $slot }}</span>
  </div>