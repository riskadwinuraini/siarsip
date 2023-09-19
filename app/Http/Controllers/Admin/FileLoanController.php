<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileLoan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.loan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, FileLoan $fileLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileLoan $fileLoan)
    {
        //
    }
}
