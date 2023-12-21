<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin BKD',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        $employee = User::create([
            'name' => 'taho',
            'email' => 'taho@mail.com',
            'password' => Hash::make('taho123'),
        ]);

        $admin->assignRole('admin');
        $employee->assignRole('employee');
    }
}
