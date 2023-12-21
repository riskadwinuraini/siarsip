<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\UsersPNSImport;
use App\Imports\UsersPPPKImport;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cari peran "employee"
        // $employeeRole = Role::where('name', 'employee')->first();

        // if ($employeeRole) {
        //     // Dapatkan pengguna yang memiliki peran "employee"
        //     $employees = $employeeRole->users;

        //     // Kirim data pengguna dengan peran "employee" ke tampilan
        //     return view('admin.employee.index', ['employees' => $employees]);
        // }
        $employees = User::latest()->paginate(10);
        return view('admin.employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validasi input dari form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'nip' => 'required|max:18',
            'type_pegawai' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'no' => 'required',
        ]);

        // Membuat user baru
        $attr = $request->all();
        $attr['password'] = Hash::make('password');
        $user = User::create($attr);

        // Menetapkan peran "employee" untuk user baru
        $employeeRole = Role::where('name', 'employee')->first();
        $user->assignRole($employeeRole);

        return redirect()->route('admin.employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return back();
    }

    function uploadPPPK(Request $request) {
        ini_set('max_execution_time', 300);
         Excel::import(new UsersPPPKImport, $request->file('users'));
        return redirect()->route('admin.employee.index')->with('success', 'Pengguna berhasil diupload.');

        // return User::latest()->get();
    }

    function uploadPNS(Request $request) {
        ini_set('max_execution_time', 300);
        Excel::import(new UsersPNSImport, $request->file('users_pns'));
        return redirect()->route('admin.employee.index')->with('success', 'Pengguna berhasil diupload.');
    }
}
