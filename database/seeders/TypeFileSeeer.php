<?php

namespace Database\Seeders;

use App\Models\TypeFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeFileSeeer extends Seeder
{

    protected $files = [
        [ 'code_file' => 'b001', 'name' => 'Fotokopi keputusan tentang pengangkatan calon pegawai pemerintah dengan perjanjian kerja (CPPPK)',],
        [ 'code_file' => 'b002', 'name' => 'Pas Photo berwarna dasar biru, ukuran 4*6 (pakaian dinas lengkap) sebanyak 3 (tiga) lembar'],
        [ 'code_file' => 'b003', 'name' => 'Mengisi daftar riwayat hidup(DRH)'],
        [ 'code_file' => 'b004', 'name' => 'Mengisi formulir FIP 01'],
        [ 'code_file' => 'b005', 'name' => 'Mengisi formulir FIP 02'],
        [ 'code_file' => 'b006', 'name' => 'Model DK(Data Keluarga lengkap, walaupun tidak massuk dalam tunjangan gaji)',],
        [ 'code_file' => 'b007', 'name' => 'Surat pemerintah melaksanakan tugas (SPMT)',],
        [ 'code_file' => 'b008', 'name' => 'Fotokopi Ijazah'],
        [ 'code_file' => 'b009', 'name' => 'Fotokopi Sertifikat pendidikan pelatihan'],
        [ 'code_file' => 'b0010', 'name' => 'Akta nikah'],
        [ 'code_file' => 'b0011', 'name' => 'Akta kelahiran anak'],
        [ 'code_file' => 'b0012', 'name' => 'Fotokopi KTP'],
        [ 'code_file' => 'b0013', 'name' => 'Fotokopi surat kematian istr/suami/anak'],
        [ 'code_file' => 'b0014', 'name' => 'Fotokopi akta perceraian'],
        [ 'code_file' => 'b0015', 'name' => 'Fotokopi akta BPJS'],
        [ 'code_file' => 'b0016', 'name' => 'Fotokopi NPWP'],
        [ 'code_file' => 'b0017', 'name' => 'Fotokopi SK tanda kehormatan/jasa/penghargaan'],
        [ 'code_file' => 'b0018', 'name' => 'Sertifikasi/kompetisi']
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        foreach($this->files as $file) { TypeFile::create($file); }
    }
}
