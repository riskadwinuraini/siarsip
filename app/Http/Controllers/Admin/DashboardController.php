<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileLoan;
use App\Models\TypeFile;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index() {
        $employeeRole = Role::where('name', 'employee')->first();

        if ($employeeRole) {
            // Dapatkan pengguna yang memiliki peran "employee"
            $employees = $employeeRole->users;
            $count_user = $employeeRole->users->count();

        }

        $typeFiles = TypeFile::all();
        $count_typeFiles = TypeFile::count();

        $peminjaman =  FileLoan::where('status', 0)->get();
        $pengembalian = FileLoan::where('status', 1)->get();
        
        return view('admin.dashboard',[
            'employees' => $employees,
            'count_user' => $count_user,
            'typeFiles' => $typeFiles,
            'count_typeFiles' => $count_typeFiles,
            'peminjaman' => $peminjaman,
            'pengembalian' => $pengembalian,
        ]);
    }
}
