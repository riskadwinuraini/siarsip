<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cupboard;
use Illuminate\Http\Request;

class CupboardController extends Controller
{
    /**
     * Display a listing of the r   esource.
     */
    public function index()
    {
        return view('cupboard.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cupboard.create');;
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
    public function show(Cupboard $cupboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cupboard $cupboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cupboard $cupboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cupboard $cupboard)
    {
        //
    }
}
