<?php

namespace Database\Seeders;

use App\Models\TypeFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeFileSeeer extends Seeder
{

    protected $files = [
        [ 'code_file' => 'b001', 'name' => 'Keputusan tentang pengangkatan calon pegawai pemerintah dengan perjanjian kerja (CPPPK)',],
        [ 'code_file' => 'b002', 'name' => 'Pas Photo berwarna dasar biru, ukuran 4*6 (pakaian dinas lengkap) sebanyak 3 (tiga) lembar'],
        [ 'code_file' => 'b003', 'name' => 'Mengisi daftar riwayat hidup(DRH)'],
        [ 'code_file' => 'b004', 'name' => 'Model DK(Data Keluarga lengkap, walaupun tidak massuk dalam tunjangan gaji)',],
        [ 'code_file' => 'b005', 'name' => 'Surat pemerintah melaksanakan tugas (SPMT)',],
        [ 'code_file' => 'b006', 'name' => 'Ijazah'],
        [ 'code_file' => 'b007', 'name' => 'Sertifikat pendidikan pelatihan'],
        [ 'code_file' => 'b008', 'name' => 'Akta nikah'],
        [ 'code_file' => 'b009', 'name' => 'Akta kelahiran anak'],
        [ 'code_file' => 'b0010', 'name' => 'KTP'],
        [ 'code_file' => 'b0011', 'name' => 'Surat kematian istr/suami/anak'],
        [ 'code_file' => 'b0012', 'name' => 'Akta perceraian'],
        [ 'code_file' => 'b0013', 'name' => 'Akta BPJS'],
        [ 'code_file' => 'b0014', 'name' => 'NPWP'],
        [ 'code_file' => 'b0015', 'name' => 'SK tanda kehormatan/jasa/penghargaan'],
        [ 'code_file' => 'b0016', 'name' => 'Sertifikasi/kompetisi']
    ];


    protected $filesPNS = [
        ['code_file' => 'A001', 'name' => 'SK Kontrak', 'status' => 'PNS'],
        ['code_file' => 'A002', 'name' => 'DRH', 'status' => 'PNS'],
        ['code_file' => 'A003', 'name' => 'Model DK', 'status' => 'PNS'],
        ['code_file' => 'A004', 'name' => 'SPMT', 'status' => 'PNS'],
        ['code_file' => 'A005', 'name' => 'Ijazah dari awal sampai akhir', 'status' => 'PNS'],
        ['code_file' => 'A006', 'name' => 'Petikan keputusan NIP baru', 'status' => 'PNS'],
        ['code_file' => 'A007', 'name' => 'Keputusan tentang PNS', 'status' => 'PNS'],
        ['code_file' => 'A008', 'name' => 'Taspen', 'status' => 'PNS'],
        ['code_file' => 'A009', 'name' => 'Karpeg', 'status' => 'PNS'],
        ['code_file' => 'A010', 'name' => 'SK Sumpah', 'status' => 'PNS'],
        ['code_file' => 'A011', 'name' => 'Surat Izin Belajar', 'status' => 'PNS'],
        ['code_file' => 'A012', 'name' => 'Sertif Pendidikan', 'status' => 'PNS'],
        ['code_file' => 'A013', 'name' => 'Akta Nikah', 'status' => 'PNS'],
        ['code_file' => 'A014', 'name' => 'Akta Anak', 'status' => 'PNS'],
        ['code_file' => 'A015', 'name' => 'Karis/Karsu', 'status' => 'PNS'],
        ['code_file' => 'A016', 'name' => 'KTP', 'status' => 'PNS'],
        ['code_file' => 'A017', 'name' => 'Surat Kematian', 'status' => 'PNS'],
        ['code_file' => 'A018', 'name' => 'Akte Cerai', 'status' => 'PNS'],
        ['code_file' => 'A019', 'name' => 'Askes', 'status' => 'PNS'],
        ['code_file' => 'A020', 'name' => 'NPWP', 'status' => 'PNS'],
        ['code_file' => 'A021', 'name' => 'SK Tanda Kehormatan', 'status' => 'PNS'],
        ['code_file' => 'A022', 'name' => 'SK Hukuman Disiplin', 'status' => 'PNS'],
        ['code_file' => 'A023', 'name' => 'Keputusan Mutasi', 'status' => 'PNS'],
        ['code_file' => 'A024', 'name' => 'Keputusan Bupati', 'status' => 'PNS'],
        ['code_file' => 'A025', 'name' => 'Gaji Berkala', 'status' => 'PNS'],
        ['code_file' => 'A026', 'name' => 'Keputusan Kenaikan Pangkat', 'status' => 'PNS'],
        ['code_file' => 'A027', 'name' => 'DP3', 'status' => 'PNS'],
        ['code_file' => 'A028', 'name' => 'SK Jabatan', 'status' => 'PNS'],
        ['code_file' => 'A029', 'name' => 'STTPL', 'status' => 'PNS'],
        ['code_file' => 'A030', 'name' => 'Penetapan Angka Kredit', 'status' => 'PNS'],
        ['code_file' => 'A031', 'name' => 'SK Mutasi', 'status' => 'PNS'],
        ['code_file' => 'A032', 'name' => 'Sertifikat/Kompetensi', 'status' => 'PNS']
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        foreach($this->files as $file) { TypeFile::create($file); }
        foreach($this->filesPNS as $filePNS) { TypeFile::create($filePNS); }
    }
}
