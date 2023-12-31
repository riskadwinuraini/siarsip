<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileLoan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;

class FileLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = FileLoan::with('user')->get();

        return view('admin.loan.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Temukan peran "employee" berdasarkan nama
        $employeeRole = Role::where('name', 'employee')->first();

        if (!$employeeRole) {
            // Handle jika peran "employee" tidak ditemukan
            abort(404, 'Role not found');
        }

        // Temukan semua pengguna dengan peran "employee"
        $employees = User::select('id', 'nip')->where('nip','!=',null)->get();

        return view('admin.loan.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FileLoan::create([
            'user_id' => $request->user_id,
            'information' => $request->information,
            'loan_date' => $request->loan_date,
            'return_date' => $request->return_date,
            'status' => false
        ]);

        return redirect()->route('admin.loan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FileLoan $fileLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileLoan $fileLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'fileId' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        // Perbarui status file di sini, misalnya menggunakan Eloquent
        $file = FileLoan::find($request->input('fileId'));
        $file->status = $request->input('status');
        $file->save();

        return response()->json(['message' => 'Status berhasil diperbarui']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileLoan $fileLoan)
    {
        //
    }
}
