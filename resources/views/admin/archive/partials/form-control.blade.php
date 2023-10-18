<hr>
    <x-form label="Kode File" name="code_file" value="{{ old('code_file',  $archiveId->code_file ?? '')  }}"/>
    <x-form label="Nama Jenis Berkas" name="name" value="{{ old('name', $archiveId->name ?? '') }}"/>

<button type="submit" class="btn btn-primary mr-2">Submit</button>
<a href="/dashboard" class="btn btn-light">Cancel</a>