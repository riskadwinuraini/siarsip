<table class="table table-striped">
<thead>
    <tr>
    <th>Nama Peminjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Pengembalian</th>
    </tr>
</thead>
<tbody>
    @foreach ($loanHistories as $file)
        <tr>
        <td>{{ $file->user->name }}</td>
        <td>{{ $file->loan_date }}</td>
        <td>{{ $file->return_date }}</td>
        </tr>
    @endforeach
</tbody>
</table>