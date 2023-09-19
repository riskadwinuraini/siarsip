<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cupboard;
use Illuminate\Http\Request;


# clean up this code

class CupboardController extends Controller
{
    /**
     * Display a listing of the r   esource.
     */
    public function index()
    {
        $cupboards = Cupboard::all();
        return view('admin.cupboard.index', compact('cupboards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Cupboard $cupboard)
    {
        return view('admin.cupboard.create', compact('cupboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $cupboard = Cupboard::create($request->all());
       return to_route('admin.cupboard.index');
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
        return view('admin.cupboard.edit', compact('cupboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cupboard $cupboard)
    {
        $cupboard->update($request->all());
        return to_route('admin.cupboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cupboard $cupboard)
    {
        $cupboard->delete();
        return to_route('admin.cupboard.index');

    }
}
