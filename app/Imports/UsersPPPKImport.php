<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class UsersPPPKImport implements ToModel, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data = [
            'nip' => $row[0],
            'name' => $row[1],
            'gender' => $row[2],
            'type_pegawai' => 'p3k',
            'work_unit' => $row[4],
            'no' => $row[5],
            'email' => $row[6] ,
            'password' => Hash::make('password'),
            'status' => 'aktif',
        ];

        return new User($data);
    }

    /**
     * Determine the batch size.
     *
     * @return int
     */
    public function batchSize(): int
    {
        return 200;  // Insert 500 records at a time
    }

    public function chunkSize(): int
    {
        return 200;
    }
}
