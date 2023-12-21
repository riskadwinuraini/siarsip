<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersPPPKImport implements ToCollection, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        collect($rows)->map(function ($row) {
            $data = [
                'nip' => $row[0],
                'name' => $row[1],
                'gender' => $row[2],
                'type_pegawai' => 'p3k',
                'work_unit' => $row[4],
                'no' => $row[5],
                'email' => $row[6],
                'password' => Hash::make('password'),
                'status' => 'aktif',
            ];

            $user = User::create($data);
            $user->assignRole('employee');

            return $user;
        });

    }

    public function uniqueBy()
    {
        return 'nip';
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
