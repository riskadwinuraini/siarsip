@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <p> Tambah data Arsip </p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">NIP</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nip">
            </div>

            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Jenis Berkas</th>
                    <th>Terlampir</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Fotokopi keputusan tentang pengangkatan Calon Pegawai Pemerintah dengan Perjanjian Kerja (CPPPK) </td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Pas photo berwarna,warna dasar biru, ukuran 4 * 6 (pakaian dinas lengkap) sebanyak 3 (tiga) lembar</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Mengisi daftar riwayat hidup (DRH)</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Mengisi formulir FIP 01</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Mengisi formulir FIP 02</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Model DK (Data keluarga lengkap,walaupun tidak masuk dalam tunjangan gaji)</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Surat Perintah Melaksanakan Tugas (SPMT)</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Fotokopi ijazah pertama s.d terakhir</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>Fotokopi sertifikat pendidikan pelatihan atau kursus yang dianggap perlu</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>Fotokopi akta nikah</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>Fotokopi akta kelahiran anak</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>Fotokopi KTP</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>Fotokopi surat kematian istri/suami/anak</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>Fotokopi akta perceraian</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>Fotokopi kartu BPJS</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>Fotokopi NPWP</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>Fotokopi SK tanda kehormatan/jasa/penghargaan</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>Fotokopi sertifikasi/kompetensi</td>
                        <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
@endsection