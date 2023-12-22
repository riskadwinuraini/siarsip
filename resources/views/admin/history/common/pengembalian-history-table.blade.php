<table class="table table-striped">
<thead>
    <tr>
    <th>Nama Peminjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    </tr>
</thead>
<tbody>
    @foreach ($loanHistories as $file)
        <tr>
            <td>{{ $file->user->name }}</td>
            <td>{{ date('d-m-Y', strtotime($file->loan_date)) }}</td>
            <td>{{ date('d-m-Y', strtotime($file->return_date)) }}</td>
        </tr>
    @endforeach
</tbody>
</table>